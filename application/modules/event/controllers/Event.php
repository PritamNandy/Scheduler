<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MX_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('event_model');
        if(!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }
    }
    
    function index() {
        $data['settings'] = $this->db->get('settings')->row();
        $this->load->view('home/header',$data);
        $this->load->view('event');
        $this->load->view('home/footer');
    }
    
    function addEvent() {
        $data['settings'] = $this->db->get('settings')->row();
        $data['day_headings'] = $this->db->get('day_heading')->result();
        $data['event_types'] = $this->db->get('event_types')->result();
        $data['locations'] = $this->db->get('location')->result();
        $data['initial_date'] = $this->db->get_where('report_date', array("id" => 1))->row();
        $this->load->view('home/header',$data);
        $this->load->view('addEvent',$data);
        $this->load->view('home/footer');
    }
    
    function addMoreEvent() {
        $id = $this->input->get('id');
        $date = $this->input->get('date');
        $data['settings'] = $this->db->get('settings')->row();
        $data['day_headings'] = $this->db->get('day_heading')->result();
        $data['event_types'] = $this->db->get('event_types')->result();
        $data['locations'] = $this->db->get('location')->result();
        if(!empty($id)) {
            $data['input_date'] = $this->db->get_where('events',array('id' => $id))->row();
        } else {
            $data['delete_date'] = $date;
        }
        $data['initial_date'] = $this->db->get_where('report_date', array("id" => 1))->row();
        $this->load->view('home/header',$data);
        $this->load->view('addEvent',$data);
        $this->load->view('home/footer');
    }
    
    function editEvent() {
        $id = $this->input->get('id');
        $data['event'] = $this->event_model->getEventById($id);
        $data['settings'] = $this->db->get('settings')->row();
        $data['day_headings'] = $this->db->get('day_heading')->result();
        $data['event_types'] = $this->db->get('event_types')->result();
        $data['locations'] = $this->db->get('location')->result();
        $this->load->view('home/header',$data);
        $this->load->view('editEvent',$data);
        $this->load->view('home/footer');
    }
    
    function deleteEvent() {
        $id = $this->input->get('id');
        $event = $this->event_model->getEventById($id);
        $this->event_model->deleteEvent($id);
        $this->session->set_flashdata('message','Event Deleted Successfully!');
        redirect('event/addMoreEvent/?date='.$event->date);
    }

	function addEditEvent() {
		$id = $this->input->post('id');
		$date = $this->input->post('date');
		$start_time = $this->input->post('start_time');
		$end_time = $this->input->post('end_time');
		$event = $this->input->post('event_name');
		$event_type = $this->input->post('event_type');
		$notes = $this->input->post('notes');
		$location = $this->input->post('location');
		$isAged = $this->input->post('isAged');
		$textTime = $this->input->post('textTime');

        if($textTime == "yes") {
            $stc = strtotime($start_time);
    		if(!empty($end_time)) {
    			$etc = strtotime($end_time);
    		} else {
    			$etc = null;
    		}
        } else {
            
        }
		

		$this->form_validation->set_rules('date','Date','required|xss_clean');
		$this->form_validation->set_rules('event_name','Event Name','required|xss_clean');
		$this->form_validation->set_rules('event_type','Event Type','required|xss_clean');
		$this->form_validation->set_rules('start_time','Start Time','required|xss_clean');
		$this->form_validation->set_rules('location','Location','required|xss_clean');

		if($this->form_validation->run() == true) {
			$ts = strtotime($date);

			$checked = $this->db->get_where('day_heading_time',array('date' => strtotime($date)))->row();
			if(!empty($checked)) {
				$day_headings = $checked->day_heading;
			} else {
				$day_headings = null;
			}
			
			if($textTime == "yes") {
                $start_time = $this->input->post('start_time_text');
                if(!empty($this->input->post('end_time_text'))) {
                    $end_time = $this->input->post('end_time_text');
                } else {
                    $end_time = null;
                }
            } else {
                $textTime = null;
               if(!empty($end_time)) {
                    $start_time = strtotime($start_time);
    				$end_time = strtotime($end_time);
    			} else {
    			    $start_time = strtotime($start_time);
    				$end_time = null;
    			} 
            }
			
			
			//$event_types = implode(",", $event_type);
			if(empty($id)) {
				$data = array(
					'date' => strtotime($date),
					'name' => $event,
					'day_heading' => $day_headings,
					'notes' => $notes,
					'event_type' => $event_type,
					'color' => $this->db->get_where('event_types',array('id' => $event_type))->row()->color,
					'start_time' => $start_time,
					'end_time' => $end_time,
					'location' => $location,
					'isAged' => $isAged,
					'text_time' => $textTime
				);

				$this->event_model->addEvent($data);
				$id = $this->db->insert_id();
				$this->session->set_flashdata('message', 'Add Successfully');
				//redirect('event/addEvent');
				redirect('event/addMoreEvent/?id='.$id);
			} else {
				$data = array(
					'date' => strtotime($date),
					'name' => $event,
					'day_heading' => $day_headings,
					'notes' => $notes,
					'event_type' => $event_type,
					'color' => $this->db->get_where('event_types',array('id' => $event_type))->row()->color,
					'start_time' => $start_time,
					'end_time' => $end_time,
					'location' => $location,
					'isAged' => $isAged,
					'text_time' => $textTime
				);
				$this->event_model->editEvent($id, $data);
				$this->session->set_flashdata('message', 'Edit Successful!');
				//redirect('event/addEvent');
				redirect('event/addMoreEvent/?id='.$id);
			}
		} else {
			$this->session->set_flashdata('message', 'Not Successful!');
			redirect('event/addEvent');
		}
	}
    
//    function addEditEvent() {
//        $id = $this->input->post('id');
//        $date = $this->input->post('date');
//        $day_heading = $this->input->post('day_heading');
//        $day_time = $this->input->post('day_time');
//        $start_time = $this->input->post('start_time');
//        $end_time = $this->input->post('end_time');
//        $event = $this->input->post('event_name');
//        $event_type = $this->input->post('event_type');
//        $notes = $this->input->post('notes');
//        $location = $this->input->post('location');
//        $isAged = $this->input->post('isAged');
//        $day_heading_text = $this->input->post('day_heading_text');
//
//        $stc = strtotime($start_time);
//        if(!empty($end_time)) {
//            $etc = strtotime($end_time);
//        } else {
//            $etc = null;
//        }
//
//        $this->form_validation->set_rules('date','Date','required|xss_clean');
//        $this->form_validation->set_rules('day_heading[]','Day Heading','required|xss_clean');
//        $this->form_validation->set_rules('day_time[]','Day Time','required|xss_clean');
//        $this->form_validation->set_rules('event_name','Event Name','required|xss_clean');
//        $this->form_validation->set_rules('event_type','Event Type','required|xss_clean');
//        $this->form_validation->set_rules('start_time','Start Time','required|xss_clean');
//        $this->form_validation->set_rules('location','Location','required|xss_clean');
//        $day_headings = implode(",", $day_heading);
//        if(!empty($day_heading_text)) {
//            $dh = array(
//                'name' => $day_heading_text,
//            );
//            $this->event_model->addDayHeading($dh);
//            $dhi = $this->db->insert_id();
//            $day_headings .= ','.$dhi;
//        }
//
//        if($this->form_validation->run() == true) {
//            $ts = strtotime($date);
//            $data2 = array(
//                'date' => strtotime($date),
//                'sunrise' => $day_time[0],
//                'chatzos' => $day_time[1],
//                'kriyas_shema_1' => $day_time[2],
//                'kriyas_shema_2' => $day_time[3],
//                'shkiya_1' => $day_time[4],
//                'shkiya_2' => $day_time[5],
//                'day_heading' => $day_headings
//            );
//            $checked = $this->db->get_where('day_heading_time',array('date' => strtotime($date)))->row();
//            if(!empty($checked)) {
//                $this->event_model->updateDateTime($ts,$data2);
//            } else {
//               $this->event_model->insertDateTime($data2);
//            }
//            if(!empty($end_time)) {
//                $end_time = strtotime($end_time);
//            }
//            //$event_types = implode(",", $event_type);
//            if(empty($id)) {
//                $data = array(
//                    'date' => strtotime($date),
//                    'name' => $event,
//                    'day_heading' => $day_headings,
//                    'notes' => $notes,
//                    'event_type' => $event_type,
//                    'color' => $this->db->get_where('event_types',array('id' => $event_type))->row()->color,
//                    'start_time' => strtotime($start_time),
//                    'end_time' => $end_time,
//                    'location' => $location,
//                    'isAged' => $isAged
//                );
//
//                $this->event_model->addEvent($data);
//                $id = $this->db->insert_id();
//                $this->session->set_flashdata('message', 'Add Successfully');
//                //redirect('event/addEvent');
//                redirect('event/addMoreEvent/?id='.$id);
//            } else {
//                $data = array(
//                    'date' => strtotime($date),
//                    'name' => $event,
//                    'day_heading' => $day_headings,
//                    'notes' => $notes,
//                    'event_type' => $event_type,
//                    'color' => $this->db->get_where('event_types',array('id' => $event_type))->row()->color,
//                    'start_time' => strtotime($start_time),
//                    'end_time' => $end_time,
//                    'location' => $location,
//                    'isAged' => $isAged
//                );
//                $this->event_model->editEvent($id, $data);
//                $this->session->set_flashdata('message', 'Edit Successful!');
//                //redirect('event/addEvent');
//                redirect('event/addMoreEvent/?id='.$id);
//            }
//        } else {
//            $this->session->set_flashdata('message', 'Not Successful!');
//            redirect('event/addEvent');
//        }
//    }
            
    function eventTypes() {
        $data['settings'] = $this->db->get('settings')->row();
        $data['event_types'] = $this->event_model->getEventTypes();
        $this->load->view('home/header',$data);
        $this->load->view('event_types',$data);
        $this->load->view('home/footer');
    }
    
    function addEditEventType() {
        $id = $this->input->post('id');
        $event = $this->input->post('event');
        $description = $this->input->post('description');
        $color = $this->input->post('color');
        $font_color = $this->input->post('font_color');
        
        $this->form_validation->set_rules('event','Event Name','required|xss_clean');
        $this->form_validation->set_rules('color','Color','required|xss_clean');
        
        if($this->form_validation->run() == true) {
            if(empty($id)) {
                $data = array(
                    'name' => $event,
                    'description' => $description,
                    'color' => $color,
                    'font_color' => $font_color,
                    'status' => 1
                );
                
                $this->event_model->addEventType($data);
                redirect('event/eventTypes');
            } else {
                $data = array(
                    'name' => $event,
                    'description' => $description,
                    'color' => $color,
                    'font_color' => $font_color
                );
                
                $this->event_model->editEventType($id, $data);
                redirect('event/eventTypes');
            }
        } else {
            redirect('event/addEventType');
        }
    }
    
    function getEventTypeByJson() {
        $id = $this->input->get('id');
        $event_type = $this->event_model->getEventTypeById($id);
        echo json_encode($event_type);
    }
    
    function addEventType() {
        $data['settings'] = $this->db->get('settings')->row();
        $this->load->view('home/header',$data);
        $this->load->view('addEventType');
        $this->load->view('home/footer');
    }
    
    function editEventType() {
        $id = $this->input->get('id');
        $data['settings'] = $this->db->get('settings')->row();
        $data['event_type'] = $this->db->get_where('event_types',array('id' => $id))->row();
        $this->load->view('home/header',$data);
        $this->load->view('addEventType',$data);
        $this->load->view('home/footer');
    }
    
    function deleteEventType() {
        $id = $this->input->get('id');
        $this->event_model->deleteEventType($id);
        redirect('event/eventTypes');
    }
    
    function printPDF() {
        $date = $this->input->get('id');
        strtotime($date);
        $data['schedules'] = $this->event_model->getScheduleByDate(strtotime($date));
        $this->load->view('printPDF',$data);
    }
    
    function getDayScheduleByJson() {
        $count = 1;
        $date = $this->input->get('date');
        strtotime($date);
        $schedules = $this->event_model->getScheduleByDate(strtotime($date));
        $data['table'] = "<table class='table'><thead class='thead-dark'><tr><th scope='col'>" . lang('time') . "</th><th scope='col'>" . lang('event') . "</th><th scope='col'>" . lang('location') . "</th><th scope='col'>" . lang('options') . "</th></tr></thead><tbody>";
        $data['hidden_table'] = "<table class='table2'><thead class='thead-dark'><tr><th scope='col'>" . lang('date') . "</th><th scope='col'>" . lang('start_time') . "</th><th scope='col'>" . lang('end_time') . "</th><th scope='col'> Event Type </th><th scope='col'>" . lang('event') . "</th><th scope='col'> Event Notes </th><th scope='col'>" . lang('location') . "</th><th scope='col'> Cell Color </th><th scope='col'> Text Color </th><th scope='col'> Over 12 </th></tr></thead><tbody>";
        
        if(!empty($schedules)) {
            foreach($schedules as $schedule) {
                $date2 = date('m/d/Y',$schedule->date);
                $hidden_event_type = $this->db->get_where('event_types',array('id' => $schedule->event_type))->row();
                $isAged = "";
                if(!empty($schedule->isAged)) {
                    $isAged = "Yes";
                } else {
                    $isAged = "No";
                }

                if($schedule->text_time == "yes") {
                    if(!empty($schedule->end_time) || $schedule->end_time != null){
                        $ed = " - ".$schedule->end_time;
                    } else {
                        $ed = "";
                    }
                    $time2 = $schedule->start_time . $ed;
                } else {
                    if(!empty($schedule->end_time) || $schedule->end_time != null){
                        $ed = " - ".date("h:i A",$schedule->end_time);
                    } else {
                        $ed = "";
                    }
                    $time2 = date("h:i A",$schedule->start_time) . $ed;
                }
                
                $name = $schedule->name;
                $location = $this->db->get_where('location',array('id' => $schedule->location))->row();
				if(isset($location)) {
					$location = $location->name;
				} else {
					$location = "";
				}
                $font_color = $this->db->get_where('event_types',array('id' => $schedule->event_type))->row()->font_color;
                //$data['table'] .= "<tr class='tr_$count' bgcolor='$schedule->color'><td><font color='$font_color'>$time2</font></td><td><font color='$font_color'>$name</font></td><td><font color='$font_color'>$location</font></td><td><a class='btn btn-warning btn-sm' href='editEvent/?id=$schedule->id'>Edit</a> <a class='btn btn-danger btn-sm' href='deleteEvent/?id=$schedule->id'>Delete</a></td></tr>";
                $data['table'] .= "<tr class='tr_$count' bgcolor='$schedule->color'><td><font color='$font_color'>$time2</font></td><td><font color='$font_color'>$name</font></td><td><font color='$font_color'>$location</font></td>"
                        . "<td><a class='btn btn-warning btn-sm' href='".site_url('event/editEvent/?id='.$schedule->id)."'>Edit</a> "
                        . "<a class='btn btn-danger btn-sm' href='".site_url('event/deleteEvent/?id='.$schedule->id)."'>Delete</a></td></tr>";
                $data['hidden_table'] .= "<tr bgcolor='$schedule->color'><td><font color='$font_color'>$date2</font></td>"
                        . "<td><font color='$font_color'>$time2</font></td>"
                        . "<td><font color='$font_color'>$ed</font></td>"
                        . "<td><font color='$font_color'>$hidden_event_type->name</font></td>"
                        . "<td><font color='$font_color'>$name</font></td>"
                        . "<td><font color='$font_color'>$schedule->notes</font></td>"
                        . "<td><font color='$font_color'>$location</font></td>"
                        . "<td><font color='$font_color'>$hidden_event_type->color</font></td>"
                        . "<td><font color='$font_color'>$hidden_event_type->font_color</font></td>"
                        . "<td><font color='$font_color'>$isAged</font></td>"
                        . "<td><font color='$font_color'>$location</font></td></tr>";
                $count++;
            }
        }
        $data['table'] .= "</tbody></table>";
        $data['hidden_table'] .= "</tbody></table>";
        $data['styles'] = "<div class='in_table_styles'> <style> @media print { body {-webkit-print-color-adjust: exact;} ";
        if(!empty($schedules)) {
            $count = 1;
            foreach($schedules as $schedule) {
                $font_color = $this->db->get_where('event_types',array('id' => $schedule->event_type))->row()->font_color;
                $data['styles'] .= " .tr_$count { background-color: $schedule->color !important; color: #000 !important; } ";
                $count++;
            }
        }
        $data['styles'] .= "} </style> </div>";
        $dayTime = $this->event_model->getDayTimeByDate(strtotime($date));
        if($dayTime == NULL) {
            $dayTime = array(
                'sunrise' => '12:00 AM',
                'chatzos' => '12:00 AM',
                'kriyas_shema_1' => '12:00 PM',
                'kriyas_shema_2' => '12:00 PM',
                'shkiya_1' => '12:00 PM',
                'shkiya_2' => '12:00 AM',
                'day_heading' => '',
                'id' => ""
            );
        }
        $data['dayTime'] = $dayTime;
        //die();
        echo json_encode($data);
        
    }
    
    function dayHeading() {
        $data['settings'] = $this->db->get('settings')->row();
        $data['day_headings'] = $this->db->get('day_heading')->result();
        $this->load->view('home/header',$data);
        $this->load->view('dayHeading',$data);
        $this->load->view('home/footer'); 
    }
    
    function addDayHeading() {
        $data['settings'] = $this->db->get('settings')->row();
        $this->load->view('home/header',$data);
        $this->load->view('addDayHeading');
        $this->load->view('home/footer'); 
    }
    
    function editDayHeading() {
        $id = $this->input->get('id');
        $data['settings'] = $this->db->get('settings')->row();
        $data['day_heading'] = $this->db->get_where('day_heading',array('id' => $id))->row();
        $this->load->view('home/header',$data);
        $this->load->view('addDayHeading',$data);
        $this->load->view('home/footer');
    }
    
    
    function addEditDayHeading() {
        $id = $this->input->post('id');
        $day_heading = $this->input->post('day_heading');
        $description = $this->input->post('description');
        
        $this->form_validation->set_rules('day_heading','Day Heading','required|xss_clean');
        
        if($this->form_validation->run() == true) {
            if(empty($id)) {
                $data = array(
                    'name' => $day_heading,
                    'description' => $description,
                    'status' => 1
                );
                
                $this->event_model->addDayHeading($data);
                redirect('event/dayHeading');
            } else {
                $data = array(
                    'name' => $day_heading,
                    'description' => $description
                );
                
                $this->event_model->editDayHeading($id, $data);
                redirect('event/dayHeading');
            }
        } else {
            redirect('event/addDayHeading');
        }
    }
    
    function deleteDayHeading() {
        $id = $this->input->get('id');
        $this->event_model->deleteDayHeading($id);
        redirect('event/dayHeading');
    }
    
    
    //LOCATION FUNCTIONS
    
    
    function location() {
        $data['settings'] = $this->db->get('settings')->row();
        $data['locations'] = $this->db->get('location')->result();
        $this->load->view('home/header',$data);
        $this->load->view('location',$data);
        $this->load->view('home/footer'); 
    }
    
    function addLocation() {
        $data['settings'] = $this->db->get('settings')->row();
        $this->load->view('home/header',$data);
        $this->load->view('addLocation');
        $this->load->view('home/footer');
    }
    
    function editLocation() {
        $id = $this->input->get('id');
        $data['settings'] = $this->db->get('settings')->row();
        $data['location'] = $this->db->get_where('location',array('id' => $id))->row();
        $this->load->view('home/header',$data);
        $this->load->view('addLocation',$data);
        $this->load->view('home/footer');
    }
    
    
    function addEditLocation() {
        $id = $this->input->post('id');
        $location = $this->input->post('location');
        $description = $this->input->post('description');
        
        $this->form_validation->set_rules('location','Location','required|xss_clean');
        
        if($this->form_validation->run() == true) {
            if(empty($id)) {
                $data = array(
                    'name' => $location,
                    'description' => $description,
                    'status' => 1
                );
                
                $this->event_model->addLocation($data);
                redirect('event/location');
            } else {
                $data = array(
                    'name' => $location,
                    'description' => $description
                );
                
                $this->event_model->editLocation($id, $data);
                redirect('event/location');
            }
        } else {
            redirect('event/addLocation');
        }
    }
    
    function deleteLocation() {
        $id = $this->input->get('id');
        $this->event_model->deleteLocation($id);
        redirect('event/location');
    }
    
    function locationStatus() {
        $status = $this->input->get('status');
        $id = $this->input->get('id');
        $data = array(
            'status' => $status
        );
        $this->event_model->editLocation($id,$data);
        $this->session->set_flashdata('message','Status Updated!');
        redirect('event/location');
    }
            
    function checkLocationOptionBySTime() {
        $date = $this->input->get('date');
        $start_time = $this->input->get('start_time');

        $date = strtotime($date);
        $start_time = strtotime($start_time);
        
        $events = $this->event_model->getLocationByDate($date);
        $data['options'] = "";
        $locations_booked = array();
        
        foreach($events as $event) {
            if($event->start_time == $start_time || ($event->start_time < $start_time && $event->end_time > $start_time)) {
                //echo $event->location;
               array_push($locations_booked, $event->location);
            }
        }
        
        $location_id = implode(",", $locations_booked);

        $locations = $this->event_model->getLocationsExcludeID($locations_booked);
        //print_r($locations);
        foreach($locations as $location) {
            $data['options'] .= '<option class="location_option" value="' . $location->id . '">' . $location->name . '</option>';
        }
        echo json_encode($data);
    }
    
    function checkLocationOptionByETime() {
        $date = $this->input->get('date');
        $start_time = $this->input->get('start_time');
        $end_time = $this->input->get('end_time');
        
        $date = strtotime($date);
        $start_time = strtotime($start_time);
        $end_time = strtotime($end_time);
        
        $events = $this->event_model->getLocationByDate($date);
        $data['options'] = "";
        $locations_booked = array();
        
        foreach($events as $event) {
            if($event->start_time == $start_time || ($event->start_time < $start_time && $event->end_time > $start_time) || ($event->start_time < $end_time && $event->end_time > $end_time)) {
                //echo $event->location;
               array_push($locations_booked, $event->location);
            }
        }
        
        $location_id = implode(",", $locations_booked);

        $locations = $this->event_model->getLocationsExcludeID($locations_booked);
        //print_r($locations);
        foreach($locations as $location) {
            $data['options'] .= '<option class="location_option" value="' . $location->id . '">' . $location->name . '</option>';
        }
        echo json_encode($data);
    }
    
    function eventTypeStatus() {
        $id = $this->input->get('id');
        $status = $this->input->get('status');
        $data = array(
          'status' => $status  
        );
        
        $this->event_model->editEventType($id,$data);
        $this->session->set_flashdata('message','Status Updated!');
        redirect('event/eventTypes');
    }
    
    function dayHeadingStatus() {
        $id = $this->input->get('id');
        $status = $this->input->get('status');
        $data = array(
          'status' => $status  
        );
        
        $this->event_model->editDayHeading($id,$data);
        $this->session->set_flashdata('message','Status Updated!');
        redirect('event/dayHeading');
    }
    
    function getLocationCheck() {
        $date = $this->input->get('date');
        $location = $this->input->get('location');
        $start_time = $this->input->get('start_time');
        $end_time = $this->input->get('end_time');
        $locations = $this->event_model->checkLocationOnDate(strtotime($date),$location);
        $check = false;
        foreach($locations as $location) {
            if (!empty($end_time)) {
                if(($location->start_time == strtotime($start_time)) || ($location->start_time < strtotime($start_time) && $location->end_time > strtotime($start_time)) || ($location->start_time < strtotime($end_time) && $location->end_time > strtotime($end_time))) {
                    $check = true;
                    break;
                }
            } else {
                if(($location->start_time == strtotime($start_time)) || ($location->start_time < strtotime($start_time) && $location->end_time > strtotime($start_time))) {
                    $check = true;
                    break;
                }
            }
        }
        
        $data['status'] = "";
        if($check == true) {
            $data['status'] = "Have booked for another program! Wanna Continue?";
        } else {
            $data['status'] = "OK";
        }
        
        echo json_encode($data);
    }
    
}


