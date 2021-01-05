<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct() {
        parent::__construct();
    }

	public function user_login($data){
        $query = $this->db->query("select * from users where username = '".$data['username']."'");
        $user = $query -> result_array();
        if(!empty($user)){
            $pass = $user[0]['password'];
            if(password_verify($data['password'],$pass)){
                return $query -> result_array();
            }
        }
        //print_r($user);die;
        //return $query->getRowArray();
        /* if(isset($row)){
            $user_name = $row['username'];
            $password = $row['password'];
        } */
    }

    public function user_registration($post){
        $username = $post['username'];
        $str = $post['password'];
        $options= ['t_salt'=>'fksafsf'];
        $password = password_hash($str, PASSWORD_BCRYPT, $options);

        $email = $post['email'];
        return $this->db->query("insert into users set 
            username = '".$username."',
            password = '".$password."',
            email = '".$email."',
            mobile=''

        
        ");
        
    }
}