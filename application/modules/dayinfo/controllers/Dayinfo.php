<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dayinfo extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dayinfo_model');
		$this->load->model('event/event_model');
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login');
		}
	}

	function index() {
		$data['settings'] = $this->db->get('settings')->row();
		$data['day_headings'] = $this->db->get('day_heading')->result();
		$data['event_types'] = $this->db->get('event_types')->result();
		$data['locations'] = $this->db->get('location')->result();
		$this->load->view('home/header',$data);
		$this->load->view('addEvent',$data);
		$this->load->view('home/footer');
	}

	function addDayInfoView() {
		$data['settings'] = $this->db->get('settings')->row();
		$data['day_headings'] = $this->db->get('day_heading')->result();
		$data['event_types'] = $this->db->get('event_types')->result();
		$data['locations'] = $this->db->get('location')->result();
		$this->load->view('home/header',$data);
		$this->load->view('addDayInfo',$data);
		$this->load->view('home/footer');
	}

	function addDayInfo() {
		$date = $this->input->post('date');
		$day_heading = $this->input->post('day_heading');
		$day_time = $this->input->post('day_time');
		$day_heading_text = $this->input->post('day_heading_text');

		$this->form_validation->set_rules('date','Date','required|xss_clean');
		$this->form_validation->set_rules('day_heading[]','Day Heading','required|xss_clean');
		$this->form_validation->set_rules('day_time[]','Day Time','required|xss_clean');
		$day_headings = implode(",", $day_heading);
		if(!empty($day_heading_text)) {
			$dh = array(
				'name' => $day_heading_text,
			);
			$this->event_model->addDayHeading($dh);
			$dhi = $this->db->insert_id();
			$day_headings .= ','.$dhi;
		}

		if($this->form_validation->run() == true) {
			$ts = strtotime($date);
			$data2 = array(
				'date' => strtotime($date),
				'sunrise' => $day_time[0],
				'chatzos' => $day_time[1],
				'kriyas_shema_1' => $day_time[2],
				'kriyas_shema_2' => $day_time[3],
				'shkiya_1' => $day_time[4],
				'shkiya_2' => $day_time[5],
				'day_heading' => $day_headings
			);
			$checked = $this->db->get_where('day_heading_time',array('date' => strtotime($date)))->row();
			if(!empty($checked)) {
				$this->event_model->updateDateTime($ts,$data2);
			} else {
				$this->event_model->insertDateTime($data2);
			}

			//$event_types = implode(",", $event_type);
			$this->session->set_flashdata('message', 'Added Successful!');
			//redirect('event/addEvent');
			redirect('dayinfo/addDayInfoView');
		} else {
			$this->session->set_flashdata('message', 'Not Successful!');
			redirect('dayinfo/addDayInfoView');
		}
	}
}
