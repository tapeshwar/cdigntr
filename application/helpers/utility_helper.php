<?php

function cssList($file_list){
    if(!empty($file_list)){
        $clist = '';
        foreach($file_list as $css_file){
            $clist .= '<link rel="stylesheet" src="'.base_url($css_file).'" type="text/css">';
        }
        return $clist;
    }
}

function jsList($file_list){
    if(!empty($file_list)){
        $jlist = '';
        foreach($file_list as $js_file){
            $jlist .= '<script src="'.base_url($js_file).'" type="text/javascript"></script>';
        }
        return $jlist;
    }
}

function pr($data){
    if(!empty($data)){
        echo '<pre>';
        print_r($data);
    }
}

?>