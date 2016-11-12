<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Login_model');
    }

    public function index(){
        
         $this->load->view('admin/login');
         
    }
    
    public function admin_login_action(){
        $this->form_validation->set_rules('email','Email','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        if($this->form_validation->run()== FALSE){
            $this->load->view('admin/login');
        }
 else {
     
     $email= $this->input->post('email');
     $password= $this->input->post('password');
     $row_num=$this->Login_model->check_user_data($email,$password);
     if($row_num==1){
         $user_data=$this->Login_model->get_user_data($email,$password);
         $this->session->set_userdata('is_admin_login',TRUE);
         $this->session->set_userdata('userid',$user_data->id);
         $this->session->set_userdata('user_email',$user_data->email);
         redirect(base_url('admin_dashboard'));
         
     }
     }
 }
 public function logout(){
     $this->session->sess_destroy();
     $redirecturl=  base_url('/');
     redirect($redirecturl);
 }
         
    

}
