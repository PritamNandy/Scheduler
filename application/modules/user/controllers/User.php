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
    
    function addEditUser() {
        $id = $this->input->post("id");
        $name = $this->input->post("name");
        $email = $this->input->post("email");
        
        $this->form_validation->set_rules('name', 'Name', 'required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'required|xss_clean');
        
       if($this->form_validation->run() == true) {
            $checkEmail = $this->db->get_where("users", array("email" => $email))->row();
            if(count($checkEmail) > 0) {
                $this->session->set_flashdata('message', 'Email Already Exists!');
                redirect('event/addEvent');
            } else {
                $group = 1;
                $password = "12345";
                $this->ion_auth->register($name, $password, $email, $group);
                $this->session->set_flashdata('message', 'User Added!');
                redirect('event/addEvent');
            }
        } else {
            $this->session->set_flashdata('message', 'Fill Required Fields!');
            redirect('event/addEvent');
        }
    }
}

