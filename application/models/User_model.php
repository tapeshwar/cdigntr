<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct() {
        parent::__construct();
    }

	public function user_login($data){
        $query = $this->db->query("select * from users where username = '".$data['username']."' and password='".$data['password']."' ");
        return $query -> result_array();
        //return $query->getRowArray();
        /* if(isset($row)){
            $user_name = $row['username'];
            $password = $row['password'];
        } */
    }
}