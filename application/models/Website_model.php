<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function setLink2(){
        //$_SESSION['project_key'] = '1161270535';
        //$set_name = '';
        $q=$this->db->query("SELECT ms.id, ms.name, ms.project_key, m.title, m.heading 
        FROM menu_set ms 
        INNER JOIN menu m 
        ON ms.id=m.id 
        AND ms.project_key=m.project_key 
        ORDER BY ms.id DESC");
        return $q->result_array();
        //pr($this->db->last_query());
    }

    public function get_mset($project_key){
        $q = $this->db->query("SELECT * FROM menu_set WHERE project_key='".$project_key."' ORDER BY id ");
        return $q->result_array();
    }

    public function get_parent_menu($msid){
        $qq = $this->db->query("SELECT * FROM menu WHERE menu_set='".$msid."' AND parent='' ORDER BY s_no ");
        return $qq->result_array();
    }

    public function get_child_menu($msid,$parent_id){
        $qq = $this->db->query("SELECT * FROM menu WHERE menu_set='".$msid."' AND parent='".$parent_id."' ORDER BY s_no ");
        return $qq->result_array();
    }




    public function setLink($id){
        $_SESSION['project_key'] = '1161270535';
        $set_name = '';
        $q=$this->db->query("SELECT * FROM menu_set WHERE project_key = '".$_SESSION['project_key']."' ORDER BY id DESC") or die(mysql_error());
        while($r = $q->result_array()){
            //pr($r);die;
            //$set_name = [];
            $ret1 = '';
            $q1=$this->db->query("SELECT * FROM menu WHERE project_key = '".$_SESSION['project_key']."' AND menu_set='".$r['id']."' AND parent='$id' ORDER BY s_no ") or die(mysql_error());
                while($r1=$q1->result_array()){
                $ret2 = '';
            $q2=$this->db->query("SELECT * FROM menu WHERE project_key = '".$_SESSION['project_key']."' AND menu_set='".$r['id']."' AND parent='".$r1['id']."' ORDER BY s_no ") or die(mysql_error());
            while($r2=$q2->result_array()){
                $ret3 = '';
                $q3=$this->db->query("SELECT * FROM menu WHERE project_key = '".$_SESSION['project_key']."' AND menu_set='".$r['id']."' AND  parent='".$r2['id']."' ORDER BY s_no ") or die(mysql_error());
                while($r3=$q3->result_array()){
                    $ret4 = '';
                    $q4=$this->db->query("SELECT * FROM menu WHERE project_key = '".$_SESSION['project_key']."' AND menu_set='".$r['id']."' AND  parent='".$r3['id']."' ORDER BY s_no ") or die(mysql_error());
                        while($r4=$q4->result_array()){
                            $ret5 = '';
                            $q5=$this->db->query("SELECT * FROM menu WHERE project_key = '".$_SESSION['project_key']."' AND menu_set='".$r['id']."' AND  parent='".$r4['id']."' ORDER BY s_no ") or die(mysql_error());
                                while($r5=$q5->result_array()){
                        
                    
                            $ret5[] = array("id"=>$r5['id'],"parent"=>$r5['parent'],"title"=>$r5['title'],"name"=>$r5['heading'],"custom_link"=>$r5['custom_link'],"enable"=>$r5['enable'],"sub_menu"=>$ret6);
                            }
                        $ret4[] = array("id"=>$r4['id'],"parent"=>$r4['parent'],"title"=>$r4['title'],"name"=>$r4['heading'],"custom_link"=>$r4['custom_link'],"enable"=>$r4['enable'],"sub_menu"=>$ret5);
                    }
                $ret3[] = array("id"=>$r3['id'],"parent"=>$r3['parent'],"title"=>$r3['title'],"name"=>$r3['heading'],"custom_link"=>$r3['custom_link'],"enable"=>$r3['enable'],"sub_menu"=>$ret4);
                }
            $ret2[] = array("id"=>$r2['id'],"parent"=>$r2['parent'],"title"=>$r2['title'],"name"=>$r2['heading'],"custom_link"=>$r2['custom_link'],"enable"=>$r2['enable'],"sub_menu"=>$ret3);
            }				
        $ret1[] = array("id"=>$r1['id'],"parent"=>$r1['parent'],"title"=>$r1['title'],"name"=>$r1['heading'],"custom_link"=>$r1['custom_link'],"enable"=>$r1['enable'],"sub_menu"=>$ret2);	
    }
            $set_name[] = array('id'=>$r['id'],'name'=>$r['name'],'set_sub_menu'=>$ret1);
        //$set_name[$r['name']]=$ret1;
    }
    return $set_name;
    }

}


?>