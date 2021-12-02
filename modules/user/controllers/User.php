<?php

class User extends MX_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }
    
    function index() {
        $data['settings'] = $this->db->get('settings')->row();
        $this->load->view('home/header',$data);
        $this->load->view('user');
        $this->load->view('home/footer');
    }
    
    function addUser() {
        $data['settings'] = $this->db->get('settings')->row();
        $this->load->view('home/header',$data);
        $this->load->view('add_user');
        $this->load->view('home/footer');
    }
}

