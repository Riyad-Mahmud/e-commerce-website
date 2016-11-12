<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_controller extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
            $this->load->model('General_model');
        }

        
	public function index()
	{       $data['mens_category']=$this->General_model->get_category(1);
        $data['womens_category']=$this->General_model->get_category(2);
                $this->load->view('header',$data);
		$this->load->view('index');
                $this->load->view('footer');
	}
        public function contact_us(){
            $this->load->view('header');
		$this->load->view('contact_us');
                $this->load->view('footer');
        }
}
