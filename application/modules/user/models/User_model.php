<?php

class User_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function getUserById($id) {
        $this->db->where("id", $id);
        return $this->db->get("users")->row();
    }
    
    function deleteUser($id) {
        $this->db->where("id", $id);
        $this->db->delete("users");
    }
    
    function editUser($id, $data) {
        $this->db->where("id", $id);
        $this->db->update("users", $data);
    }
}

