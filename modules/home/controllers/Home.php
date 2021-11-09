<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->module('auth');
        if(!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }
    }
    
    function index() {
        $data['settings'] = $this->db->get('settings')->row();
        $this->load->view('header',$data);
        $this->load->view('home',$data);
        $this->load->view('footer');
    }
    
}
