<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CORE_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('Util');
		$this->load->model('user_model');
		//$this->data['js'] = ['tushar.js'];
    }

	public function index()
	{

		$this->load->view('login_view');
	}

	public function user_login(){
		
		$post = $this->input->post();
		
		$ret = $this->user_model->user_login($post);
		if(!empty($ret[0]['username'])){
			$sess_data = [
				'id'=>$ret[0]['id'],
				'username'=>$ret[0]['username'],
				'email'=>$ret[0]['email'],
				'mobile'=>$ret[0]['mobile']
			];
			$this->session->set_userdata($sess_data);
			//return redirect('login/dashboard');
			$return['url'] = 'login/dashboard';
			$return['status'] = 'success';
			$return['msg'] = 'Login Successfully';
		}else{
			$return['status'] = 'error';
			$return['msg'] = 'Invalid Login';
		}

		echo json_encode($return);
		exit();

	}

	public function dashboard(){
				
		

		$data = [
			'title' => 'Dashboard',
			'heading' => 'Dashboard',
		];

		//echo '<pre>';
		//print_r(array_merge($this->data,$data));
		//die;
		
		$this->load->view('template/template_dashboard',array_merge($data,$data));
	}
	

	public function logout(){
		if(!empty($this->session->userdata())){
			$this->session->sess_destroy();
			return redirect('login');
		}
	}

	public function user_register(){

		
		$data = [
			'title' => 'User Registation',
			'heading' => 'User Registation',
		];

		$this->load->view('login/user_register_modal',array_merge($data,$data));

	}

	public function user_registration(){

		 if(!empty($this->input->post())){
			$post = $this->input->post();

			$res = $this->user_model->user_registration($post);

			$return['status'] = 'success';
			$return['msg'] = 'Registration successfully saved..';
			$this->session->set_flashdata('success', 'Registration successfully saved ');
			echo json_encode($return);
			exit();
		}


	}
}
