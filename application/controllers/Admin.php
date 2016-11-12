<?php

class Admin extends CI_Controller {
    public function __construct() {
        
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('General_model');
       if(!$this->session->userdata('is_admin_login')){
           redirect(base_url('/'));
       }
       }
    
    public function index(){
        $this->load->view('admin/header');
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }
    public function all_category(){
        $row=  $this->db->get('category')->num_rows();
       $data['result'] = $this->db->get('category')->result();
        $config['base_url']=  base_url().'all_category';
        $config['total_rows']=$row;
        $config['per_page']=5;
        $this->pagination->initialize($config);
        $this->load->view('admin/header');
        $this->load->view('admin/all_category',$data);
        $this->load->view('admin/footer');
    }
    
    public function edit_category(){
        $id=  $this->input->get('id');
        
        $data['data']=$this->General_model->get_category($id);
        
        $this->load->view('admin/header');
        $this->load->view('admin/add_category',$data);
        $this->load->view('admin/footer');
    }
    
    public function update_category(){
       $data['cat_type']= $this->input->post('cat_type');
       $data['cat_name']= $this->input->post('cat_name');
       $id= $this->input->get('id');
      
       
       
       $result=$this->General_model->update_category_byid($data,$id);
       if($result){
           redirect(base_url('all_category'));
       }
       
    }
    
    public function add_category(){
        $this->load->view('admin/header');
        $this->load->view('admin/add_category');
        $this->load->view('admin/footer');
    }
    
    public function add_category_action(){
        $this->form_validation->set_rules('cat_type','Category Type','trim|required');
        $this->form_validation->set_rules('cat_name','Category Name','trim|required');
        
        if($this->form_validation->run()== FALSE){
         $this->load->view('admin/header');
        $this->load->view('admin/add_category');
        $this->load->view('admin/footer');
        }
 else {
     $data['cat_type']=$this->input->post('cat_type');
     $data['cat_name']=$this->input->post('cat_name');
     $insert=$this->General_model->insertTableData('category',$data);
     if($insert){
         $this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success!</strong>Category Added Successfully</div>');
     
         redirect(base_url('add_category'));
     }
     
 }
    }
    
    public function product_list($segment=0){
        
        $limit = 3;

        $total_row = $this->db->get('product')->num_rows();

        $offset = $segment == 0 ? 0 : ($segment - 1) * $limit;

        $config['base_url'] = base_url() . '/' . 'product_list';

        $config['total_rows'] = $total_row;

        $config['per_page'] = $limit;

        $config["uri_segment"] = 2;

        $config['use_page_numbers'] = TRUE;

        $config['display_pages'] = TRUE;


        //config for bootstrap pagination class integration

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $data['results'] = $this->db->query("select product.*,category.cat_name from product join category on category.id = product.category_name limit $offset,  $limit")->result();

        $this->pagination->initialize($config);

        $this->load->view('admin/header');
        $this->load->view('admin/product_list',$data);
        $this->load->view('admin/footer');
    }
    
    public function add_product(){
        $this->load->view('admin/header');
        $this->load->view('admin/add_product');
        $this->load->view('admin/footer');
    }
    
    public function get_category_by_ajax($category){
        $data=$this->General_model->get_category_by_ajax($category);
        foreach ($data as $value) {
            echo '<option value="'.$value->id.'">'.$value->cat_name.' </option>';
            
        }
    }
    
    public function add_product_action(){
        $this->form_validation->set_rules('cat_type','Category Type','trim|required');
        $this->form_validation->set_rules('category_name','Category Name','trim|required');
        $this->form_validation->set_rules('special_package','Special Package','trim|required');
        $this->form_validation->set_rules('product_name','Product Name','trim|required');
        $this->form_validation->set_rules('product_description','Product Description','trim|required');
        $this->form_validation->set_rules('product_price','Product Price','trim|required');
            
        if($this->form_validation->run()== FALSE){
        $this->load->view('admin/header');
        $this->load->view('admin/add_product');
        $this->load->view('admin/footer');
        }
 else {
     $data['cat_type']=$this->input->post('cat_type');
     $data['category_name']=$this->input->post('category_name');
     $data['special_package']=$this->input->post('special_package');
     $data['product_name']=$this->input->post('product_name');
     $data['product_description']=$this->input->post('product_description');
     $data['product_price']=$this->input->post('product_price');
     
            $config['upload_path'] = './products/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 1000;
            $config['max_width'] = 2000;
            $config['max_height'] = 1000;

            $this->load->library('upload', $config);
     if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {
                $data['product_image'] = $this->upload->data('file_name');
            }
     
     $is_insert = $this->General_model->insertTableData('product', $data);
            if ($is_insert) {
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                                                <strong>Success! </strong> Product Added Successfully !! 
                                                </div>');
                redirect(base_url('product_list/add_product'));
            }
     
 }
    }
}
?>
