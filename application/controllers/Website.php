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
            /* $ret1=[];      
            foreach($mset as $mk=>$mv){
                $menu1 = $this->website_model->get_parent_menu($mv['id']);



                $ret1[] = ['id'=>$mv['id'],'name'=>$mv['name'],'set_sub_menu'=>$menu1];

            } */
            

            $menu = '';
            $sub_menu = '';
            foreach ($mset as $v) {
                //pr($v);die;
                $result2 = $this->website_model->get_parent_menu($v['id']);
                $sub_menu = '';
                foreach ($result2 as $v2) {  

                    $result3 = $this->website_model->get_child_menu($v2['menu_set'],$v2['id']);
                    $sub_menu2 = '';
                    foreach ($result3 as $v3) {

                        $result4 = $this->website_model->get_child_menu($v3['menu_set'],$v3['id']);
                        $sub_menu3 = '';
                        foreach ($result4 as $v4) {

                            $result5 = $this->website_model->get_child_menu($v4['menu_set'],$v4['id']);
                            $sub_menu4 = '';
                            foreach ($result5 as $v5) {

                                $result6 = $this->website_model->get_child_menu($v5['menu_set'],$v5['id']);
                                $sub_menu5 = '';
                                foreach ($result6 as $v6) {
                                    
                                    $sub_menu5[] = array('id'=>$v6['id'],'name'=>$v6['heading'],'title'=>$v6['title'],'parent'=>$v6['parent'],'custom_link'=>$v6['custom_link'],'enable'=>$v6['enable']);
                                }
                                
                                $sub_menu4[] = array('id'=>$v5['id'],'name'=>$v5['heading'],'title'=>$v5['title'],'parent'=>$v5['parent'],'custom_link'=>$v5['custom_link'],'enable'=>$v5['enable'],'sub_menu'=>$sub_menu5);
                            }

                            
                            $sub_menu3[] = array('id'=>$v4['id'],'name'=>$v4['heading'],'title'=>$v4['title'],'parent'=>$v4['parent'],'custom_link'=>$v4['custom_link'],'enable'=>$v4['enable'],'sub_menu'=>$sub_menu4);
                        }


                        $sub_menu2[] = array('id'=>$v3['id'],'name'=>$v3['heading'],'title'=>$v3['title'],'parent'=>$v3['parent'],'custom_link'=>$v3['custom_link'],'enable'=>$v3['enable'],'sub_menu'=>$sub_menu3);
                    }

                    $sub_menu[] = array('id'=>$v2['id'],'name'=>$v2['heading'],'title'=>$v2['title'],'enable'=>$v2['enable'],'parent'=>$v2['parent'],'custom_link'=>$v2['custom_link'],'sub_menu'=>$sub_menu2);
                }    

             $menu[] = array('id'=>$v['id'],'name'=>$v['name'],'set_sub_menu'=>$sub_menu);               
            }

            //pr($menu);
            //die;

            
        }

        //pr($mn);
        //pr($chmn);
        //die('test');
	
		$data = [
			'title' => 'Dashboard',
			'heading' => 'Dashboard',
            'menu2' => $menu,
		];
		
		$this->load->view('template/template_dashboard',array_merge($data,$this->assets));
    }
    
}
	
