<?php

class Util{

    public function __construct(){
        
        $CI = & get_instance();
        $CI->load->helpers('url');
        $CI->load->library('session');
    }

    public function jsList($file){
       if(!empty($file)){
            $list = '';
            foreach($file as $v){
                $list .= '<script type="text/javascript" src="'.$v.'"></script>';
             }

           return $list;
       }
    }

    public function cssList($file){
        if(!empty($file)){
            $list = '';
            foreach($file as $v){
                $list .= '<link href="'.$v.'" rel="stylesheet" type="text/css">';
            }
 
            return $list;
        }
     }


}

?>