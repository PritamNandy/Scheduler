<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }
    
    function addEventType($data) {
        $this->db->insert('event_types',$data);
    }
    
    function editEventType($id, $data) {
        $this->db->where('id',$id);
        $this->db->update('event_types',$data);
    }
    
    function getEventTypes() {
        $query = $this->db->get('event_types')->result();
        return $query;
    }
    
    function getEventTypeById($id) {
        $this->db->where('id',$id);
        $query = $this->db->get('event_types')->row();
        return $query;
    }
    
    function getScheduleByDate($date) {
        $this->db->where('date',$date);
        $this->db->order_by('start_time', 'ASC');
        $query = $this->db->get('events')->result();
        return $query;
    }
    
    function getDayTimeByDate($date) {
        $this->db->where('date',$date);
        $query = $this->db->get('day_heading_time')->row();
        return $query;
    }
    
    function deleteEventType($id) {
        $this->db->where('id',$id);
        $this->db->delete('event_types');
    }
    
    function deleteDayHeading($id) {
        $this->db->where('id',$id);
        $this->db->delete('day_heading');
    }
    
    function addDayHeading($data) {
        $this->db->insert('day_heading',$data);
    }
    
    function editDayHeading($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('day_heading',$data);
    }
    
    
    function deleteLocation($id) {
        $this->db->where('id',$id);
        $this->db->delete('location');
    }
    
    function addLocation($data) {
        $this->db->insert('location',$data);
    }
    
    function editLocation($id, $data) {
        $this->db->where('id',$id);
        $this->db->update('location',$data);
    }
    
    function insertDateTime($data2) {
        $this->db->insert('day_heading_time',$data2);
    }
    
    function updateDateTime($ts,$data2) {
        $this->db->where('date',$ts);
        $this->db->update('day_heading_time',$data2);
    }
    
    function addEvent($data) {
        $this->db->insert('events',$data);
    }
    
    function editEvent($id, $data) {
        $this->db->where('id',$id);
        $this->db->update('events',$data);
    }
    
    function deleteEvent($id) {
        $this->db->where('id',$id);
        $this->db->delete('events');
    }
    
    function getEventById($id) {
        $this->db->where('id',$id);
        $query = $this->db->get('events')->row();
        return $query;
    }
    
    function getLocationByDate($date) {
        $this->db->where('date',$date);
        $query = $this->db->get('events')->result();
        return $query;
    }
    
    function getLocationsExcludeID($location_id) {
        $this->db->where_not_in("id",$location_id);
        $query = $this->db->get('location')->result();
        return $query;
    }
    
    function checkLocationOnDate($date,$location) {
        $this->db->where('date',$date);
        $this->db->where('location',$location);
        $query = $this->db->get('events')->result();
        return $query;
    }
    
}


