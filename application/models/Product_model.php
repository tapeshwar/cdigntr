<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

    private $tbl = 'products';
    public function __construct() {
        parent::__construct();
    }


	public function save_data($data,$idata=NULL){
        if(!empty($data)){
            $this->db->insert('products',$data);

            $insert_id = $this->db->insert_id();

            $img_data['product_id'] = $insert_id;
            $img_data['name'] = $idata['name'];
            return $this->db->insert('product_img',$img_data);
        }
    }

    public function save_normal_data($data,$table){
        if(!empty($data)){
            return $this->db->insert($table,$data);
        }
    }

    public function update_data($data,$id,$table){
        if(!empty($data)){
            $this->db->where('id',$id);
            return $this->db->update($table,$data);
        }
    }

    public function delete_data($id,$table){
        if(!empty($id)){
            $this->db->where('id',$id);
            return $this->db->delete($table);
        }
    }

    public function get_data($get=NULL,$count=NULL,$offset=NULL,$limit=NULL){
        //$this->db->select("id,name,id,dkn");
        
        /* if(!empty($offset)){
            $this->db->();
        }
        if(!empty($limit)){
            $this->db->();
        } */

        $query = $this->db->get('products',$limit,$offset);
        if(!empty($count)){
            $count = $query->num_rows();  
        }
        
        $result = $query->result_array();
        $data['count'] = $count;
        $data['data'] = $result;
        //return $query->result(); // return in object
        return $data;
    }

    public function get_data2($get,$count){
      
        if(!empty($get['name'])){
            $this->db->where('name', $get['name']);
        }

        if(!empty($count)){
            return $count = $this->db->get('products')->num_rows();
        }else{
            if(!empty($get['offset'])){
                $offset = $get['offset'];
            }else{
                $offset = 0;
            }
            if(!empty($get['limit'])){
                $limit = $get['limit'];
            }
       
            $this->db->limit($limit,$offset);
        
            if(!empty($count)){
                $count = $this->db->get('products')->num_rows();
            }
            $query = $this->db->get('products');
            $result = $query->result_array();
            $data['data'] = $result;
            return $data;
        }
        
       
    }


    public function get_name_by_id($tbl_one_id, $tbl_two_refid, $table){
        $this->db->where($tbl_two_refid,$tbl_one_id);
        $query = $this->db->get($table);
        return $query->result_array();
    }

    public function get_normal_data($get,$count,$table){
      
        if(!empty($get['category_name'])){
            $this->db->where('category_name', $get['category_name']);
        }

        if(!empty($count)){
            return $count = $this->db->get($table)->num_rows();
        }else{
            if(!empty($get['offset'])){
                $offset = $get['offset'];
            }else{
                $offset = 0;
            }
            if(!empty($get['limit'])){
                $limit = $get['limit'];
            }
       
            $this->db->limit($limit,$offset);
        
            if(!empty($count)){
                $count = $this->db->get($table)->num_rows();
            }
            $query = $this->db->get($table);
            $result = $query->result_array();
            $data['data'] = $result;
            return $data;
        }
        
       
    }
}