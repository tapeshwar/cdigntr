<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_projects($user_id){
        $q = $this->db->query("SELECT * FROM project WHERE assigned_user LIKE '%$user_id%' AND enable = 'Yes' ");
        return $q->result_array();
    }

    

    


}


?>