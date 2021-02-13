<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CORE_Controller {

    private $assets = []; 

	public function __construct() {
		parent::__construct();
		$this->load->library('Util');
		$this->load->model('website_model');
        $this->assets['js'] = ['website.js'];
    }

	public function index(){
		
        if (empty($this->session->userdata('id'))) {
			redirect(base_url('home/login'));
			exit();
		}

        //$menu = setLink2('');
        $project_key = '1161270535';
        $mset = $this->website_model->get_mset($project_key);
        
        if(!empty($mset)){
            $mn = [];
            foreach($mset as $mv){
                $mn[$mv['name']] = $this->website_model->get_parent_menu($mv['id']);
            }

            if(!empty($mn)){
                $chmn = [];
                foreach($mn as $k=>$sv){
                    pr($sv);
                    /* foreach($sv as $v){
                        $chmn[$k] = $this->website_model->get_child_menu($v['menu_set'],$v['id']);
                    } */
                   
                    
                }
            }
        }

        //pr($mn);
        //pr($chmn);
        die('test');
	
		$data = [
			'title' => 'Dashboard',
			'heading' => 'Dashboard',
            'menu2' => $menu,
		];
		
		$this->load->view('template/template_dashboard',array_merge($data,$this->assets));
    }
    
}
	
