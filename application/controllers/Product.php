<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CORE_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('Util');
		$this->load->model('product_model');
		//$this->data['js'] = ['test.js'];
    }


	public function create_product(){
		if(empty($this->session->userdata('id'))){
			return redirect(base_url());
		}
		if(!empty($this->input->post())){
			$postdata = $this->input->post();
			//pr($_FILES['product_img']);die;
			if(!empty($_FILES['product_img'])){
				//$config['file_name'] = date("Y_m_d H:i:s");
				$config = [
					//'encrypt_name' => TRUE,
					'file_name' => 'custom_name'.time(),
					'upload_path'=>'uploads/',
					'allowed_types'=>'gif|jpg|png',
					'max_width'=>1024,
					'max_size'=>100,
					'max_height'=>768
				];          
               
				$this->upload->initialize($config);
				$this->upload->do_upload('product_img');

				$res_data = $this->upload->data();
            	$filename = $res_data['file_name'];
			}
			$img_data['name'] = $filename;
			//unset($postdata['xyz']);		
			$res = $this->product_model->save_data($postdata,$img_data);
			if(!empty($res)){
				$this->session->set_flashdata('success', 'Product added successfully!!');
				$return['status'] = 'success';
				$return['msg'] = 'Product added successfully!!';
				echo json_encode($return);
				exit();
			}
		}

		$data = [
			'title' => 'Create Product',
			'heading' => 'Create Product'
		];
		$this->load->view('template/template_dashboard',array_merge($data,$data));
	}

	public function index(){
		if(empty($this->session->userdata('id'))){
			return redirect(base_url());
		}

		$get = $this->input->get();
		if(!empty($get['name'])){
			$get['name'] = $get['name'];
		}
		
		$total_row = $this->product_model->get_data2($get,'count');

		$config['base_url'] = base_url('product/index');
		$config['total_rows'] = $total_row;
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		$config['reuse_query_string'] = TRUE;
		//$config['use_page_numbers'] = TRUE;

	/* <ul class="pagination">
		<li class="page-item disabled"><span class="page-link">Previous</span></li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item active"><span class="page-link">2<span class="sr-only">(current)</span></span></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item"><a class="page-link" href="#">Next</a></li>
	</ul> */

		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = "<li class='page-item'><span class='page-link'>";
		$config['num_tag_close'] = "</span></li>";
		$config['cur_tag_open'] = "<li class='page-item active'><span class='page-link'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></span></li>";
		$config['next_tag_open'] = "<li class='page-item'><span class='page-link'>";
		$config['next_tag_close'] = "</span></li>";
		$config['prev_tag_open'] = "<li class='page-item'><span class='page-link'>";
		$config['prev_tag_close'] = "</span></li>";
		$config['first_tag_open'] = "<li class='page-item'><span class='page-link'>";
		$config['first_tag_close'] = "</span></li>";
		$config['last_tag_open'] = "<li class='page-item'><span class='page-link'>";
		$config['last_tag_close'] = "</span></li>";



		$this->pagination->initialize($config); 

		$get['offset'] = $this->uri->segment(3);
		$get['limit'] = 5;
		
		$data = $this->product_model->get_data2($get,$count=NULL);
		//pr($data);die;

		$data = [
			'title' => 'Product List',
			'heading' => 'Product List',
			'product_data' => $data['data'],
			'page' => $get['offset']
		];
		$this->load->view('template/template_dashboard',array_merge($data,$data));
		
	}
}
