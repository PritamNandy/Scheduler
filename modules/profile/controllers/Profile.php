<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MX_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('profile_model');
    }
    
    function index() {
        $data['profile'] = $this->ion_auth->user()->row();
        $data['settings'] = $this->db->get('settings')->row();
        $this->load->view('home/header',$data);
        $this->load->view('profile',$data);
        $this->load->view('home/footer');
    }
    
    function editProfile() {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $data = array();
        if(!empty($password)) {
           $data = array(
               'username' => $name,
               'email' => $email,
               'password' => $password
           ); 
        } else {
            $data = array(
                'username' => $name,
                'email' => $email
            );
        }
        $this->ion_auth->update($id, $data);
    }
}
