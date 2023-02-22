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

	function reset_date() {
		$this->load->view('home/header');
		$this->load->view('reset_date');
		$this->load->view('home/footer');
	}

	function resetDate() {
		$day_headings = $this->db->get('day_heading_time')->result();
		foreach($day_headings as $day_heading) {
			if(date('Y', $day_heading->date) < date('Y')) {
				$new_date = date('m-d', $day_heading->date);
				$new_date = date('Y').'-'.$new_date;

				$this->db->where('id', $day_heading->id);
				$this->db->update('day_heading_time', array('date' => strtotime($new_date))); 
			}
		}


		$events = $this->db->get('events')->result();
		foreach($events as $event) {
			if(is_numeric($event->start_time) && date('Y', $event->date) < date('Y')) {
				$new_date = date('m-d', $event->date);
				$new_date = date('Y').'-'.$new_date;

				$this->db->where('id', $event->id);
				$this->db->update('events', array('date' => strtotime($new_date)));

				if(is_numeric($event->start_time)) {
					$new_start_time = date('m-d H:i:s', $event->start_time);
					$new_start_time = date('Y').'-'.$new_start_time;

					$this->db->where('id', $event->id);
					$this->db->update('events', array('start_time' => strtotime($new_start_time)));
				}

				if(is_numeric($event->end_time)) {
					$new_end_time = date('m-d H:i:s', $event->end_time);
					$new_end_time = date('Y').'-'.$new_end_time;

					$this->db->where('id', $event->id);
					$this->db->update('events', array('end_time' => strtotime($new_end_time)));
				}
			}
		}
		$this->session->set_flashdata('message', 'Event Deleted Successfully!');
		$this->load->view('home/header');
		$this->load->view('reset_date');
		$this->load->view('home/footer');
		//print_r($day_headings);
	}
}

