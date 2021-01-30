<?php
class CORE_Controller extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $this->data = ['data.js','data2.js'];
        $this->append_js(['test1.js','test2.js']);
        $this->append_css['css'] = [];
	
        
    }

    protected function append_js($js_file){
         if(!empty($js_file)){
            return $this->data = array_merge($this->data,$js_file);
        }else{
            return $this->data = $js_file;
        }
        
        //return $js_file;
    }

    
    /* protected function append_jc($jc){
        $this->data['js'] = (!empty($jc['js'])) ? array_merge($this->data['js'],$jc['js']) : $this->data['js'];
        $this->data['css'] = (!empty($jc['js'])) ? array_merge($this->data['css'],$jc['css']) : $this->data['css'];
    } */

}


?>