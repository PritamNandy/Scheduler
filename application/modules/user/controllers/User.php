<?php

class User extends MX_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library("ion_auth");
    }
    
    function index() {
        $data['settings'] = $this->db->get('settings')->row();
        $data['users'] = $this->db->get("users")->result();
        $this->load->view('home/header',$data);
        $this->load->view('user', $data);
        $this->load->view('home/footer');
    }
    
    function addUser() {
        $data['settings'] = $this->db->get('settings')->row();
        $this->load->view('home/header',$data);
        $this->load->view('add_user');
        $this->load->view('home/footer');
    }
    
    function editUser() {
        $id = $this->input->get('id');
        $data['user'] = $this->user_model->getUserById($id);
        $data['settings'] = $this->db->get('settings')->row();
        $this->load->view('home/header',$data);
        $this->load->view('edit_user', $data);
        $this->load->view('home/footer');
    }
    
    function addEditUser() {
        $id = $this->input->post("id");
        $name = $this->input->post("name");
        $email = $this->input->post("email");
        
        $this->form_validation->set_rules('name', 'Name', 'required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'required|xss_clean');
        
       if($this->form_validation->run() == true) {
            if(empty($id)) {
                $checkEmail = $this->db->get_where("users", array("email" => $email))->row();
                if($checkEmail) {
                    $this->session->set_flashdata('message', 'Email Already Exists!');
                    redirect('user/addUser');
                } else {
                    $group = 1;
                    $password = "12345";
                    $this->ion_auth->register($name, $password, $email, $group);
                    $this->session->set_flashdata('message', 'User Added!');
                    redirect('user');
                }
            } else {
                $checkEmail = $this->db->get_where("users", array("email" => $email))->row();
                if($checkEmail) {
                    if($checkEmail->email == $email) {
                        $data = array(
                            "username" => $name,
                            'email' => $email
                        );
                        $this->user_model->editUser($id, $data);
                        $this->session->set_flashdata('message', 'Updated Successfully!');
                        redirect('user');
                    } else {
                          $this->session->set_flashdata('message', 'Email Already Exists!');
                          redirect('user/editUser?id='.$id);
                    }
                } else {
                    $data = array(
                        "username" => $name,
                        'email' => $email
                    );
                    $this->user_model->editUser($id, $data);
                    $this->session->set_flashdata('message', 'Updated Successfully!');
                    redirect('user');
                }
            }
        } else {
            if(empty($id)) {
                $this->session->set_flashdata('message', 'Fill Required Fields!');
                redirect('user/addUser');
            } else {
                $this->session->set_flashdata('message', 'Fill Required Fields!');
                redirect('user/editUser?id='.$id);
            }
        }
    }
    
    function deleteUser() {
        $id = $this->input->get("id");
        $this->user_model->deleteUser($id);
        $this->session->set_flashdata('message', 'Deleted Successfully!');
        redirect('user');
    }
    
    function forgotPassword() {
        $email = $this->input->post("email");
        $check = $this->db->get_where("users", array("email" => $email))->row();
        
        if($check) {
            $code = rand(0000, 9999);
        
            $data = array(
                'forgotten_password_code' => $code
            );

            $this->db->where('email', $email);
            $this->db->update("users", $data);
            $link = site_url('user/changePassword?id='.$check->id.'&token='.$code);

            $this->load->library('email');
            $this->email->from('info@pttschedule.com', 'PTTSchedule');
            $this->email->to($email);

            $this->email->subject('Reset Password');
            $this->email->message('Change password using this link: '.$link);
            $this->email->set_mailtype("html");

            $this->email->send();
        } else {
            $this->session->set_flashdata('message', 'Email Not Found');
            redirect("auth/login");
        }
    }
    
    function changePassword() {
        $id = $this->input->get("id");
        $token = $this->input->get("token");
        
        $check = $this->db->get_where("users", array("id" => $id, 'forgotten_password_code' => $token))->row();
        
        if($check) {
            $data["id"] = $check->id;
            $this->load->view("changePassword", $data);
        } else {
            $this->session->set_flashdata('message', 'Token Expired');
            redirect("auth/login");
        }
    }
    
    function updatePassword() {
        $id = $this->input->post("id");
        $password = $this->input->post("password");
        $data = array(
            "password" => $password
        );
        $this->ion_auth->update($id, $data);
        $data2 = array(
            'forgotten_password_code' => null
        );
        $this->db->where('id', $id);
        $this->db->update("users", $data2);
        
        $this->session->set_flashdata('message', 'Password Changed Successfully');
        redirect("auth/login");
    }
}

