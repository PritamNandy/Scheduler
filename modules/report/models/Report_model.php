<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Report_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    function getReport($from, $to) {
        $this->db->where('date >=', $from);
        $this->db->where('date <=', $to);
        $this->db->order_by('date','ASC');
        $this->db->order_by('start_time','ASC');
        $query = $this->db->get('events')->result();
        return $query;
    }
}

