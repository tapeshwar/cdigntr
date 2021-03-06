<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CORE_Controller {

    private $assets = []; 

	public function __construct() {
		parent::__construct();
		$this->load->library('Util');
		$this->load->model('project_model');
        $this->assets['js'] = ['project.js'];
    }

	public function index(){
		
        if (empty($this->session->userdata('id'))) {
			redirect(base_url('home/login'));
			exit();
		}

        

        $user_id = $this->session->userdata('id');
        $projects = $this->project_model->get_projects($user_id);
        //pr($projects);die;
        
	
		$data = [
			'title' => 'Manage Projects',
			'heading' => 'Manage Projects',
            'siteURL' => (!empty($projects)) ? $projects : NULL,
		];
		
		$this->load->view('template/template_dashboard',array_merge($data,$this->assets));
    }

    public function enter(){
        if (empty($this->session->userdata('id'))) {
			redirect(base_url('home/login'));
			exit();
		}
        $user_id = $this->session->userdata('id');
        if(!empty($this->input->post())){
            $post = $this->input->post();
            $_SESSION['project_key'] = $post['projectkey'];
	        $_SESSION['project_name'] = $post['projectname'];
	        $_SESSION['project_domain'] = $post['projectdomain'];
            return redirect('projects/index');
        }

    }

    public function change_project(){
        unset($_SESSION['project_key']);
	    unset($_SESSION['project_name']);
	    unset($_SESSION['project_domain']);
        return redirect('projects/index');
    }


    
    
}
	
