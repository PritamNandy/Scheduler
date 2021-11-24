<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends MX_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('report_model');
    }
    
    function index() {
        $data['settings'] = $this->db->get('settings')->row();
        $data['daterange'] = $this->db->get_where('report_date', array("id" => 1))->row();
        if(isset($data['daterange'])) {
            if($data['daterange']->daterange != null || $data['daterange']->daterange != "") {
                $date = explode(' - ', $data['daterange']->daterange);
                $data['reports'] = $this->report_model->getReport(strtotime($date[0]),strtotime($date[1]));
                $data['from'] = strtotime($date[0]);
                $data['to'] = strtotime($date[1]);
            }
        } else {
            $data['reports'] = "";
        }
        
        $this->load->view('home/header',$data);
        $this->load->view('report',$data);
        $this->load->view('home/footer');
    }
    
    function getReport() {
        $daterange = $this->input->post('daterange');
        $date = explode(' - ', $daterange);
        $data['reports'] = $this->report_model->getReport(strtotime($date[0]),strtotime($date[1]));
        $data['daterange'] = $daterange;
        $data['from'] = strtotime($date[0]);
        $data['to'] = strtotime($date[1]);
        $data['settings'] = $this->db->get('settings')->row();
        $this->load->view('home/header',$data);
        $this->load->view('report',$data);
        $this->load->view('home/footer');
    }
    
    function defaultDate() {
        $data['daterange'] = $this->db->get_where('report_date', array("id" => 1))->row();
        $this->load->view('home/header');
        $this->load->view('defaultDate',$data);
        $this->load->view('home/footer');
    }
    
    function addDefaultDate() {
        $daterange = $this->input->post('daterange');
        $data = array(
            'daterange' => $daterange
        );
        
        $this->db->where("id", 1);
        $this->db->update("report_date", $data);
        
        return redirect('report/defaultDate');
    }
}

