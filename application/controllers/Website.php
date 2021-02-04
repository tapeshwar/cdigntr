<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CORE_Controller {

    private $assets = []; 

	public function __construct() {
		parent::__construct();
		$this->load->library('Util');
		$this->load->model('user_model');
        $this->assets['js'] = ['website.js'];
    }

	public function index(){
		
        if (empty($this->session->userdata('id'))) {
			redirect(base_url('home/login'));
			exit();
		}
	
		$data = [
			'title' => 'Dashboard',
			'heading' => 'Dashboard',
		];
		
		$this->load->view('template/template_dashboard',array_merge($data,$this->assets));
    }
    
}
	
