<?php


class Login_model extends CI_Model {
    
    
    public function check_user_data($email,$password) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email',$email);
        $this->db->where('password',  md5($password));
        $res=$this->db->get()->num_rows();
        
        return $res;
    }
    
    public function get_user_data($email,$password) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email',$email);
        $this->db->where('password',  md5($password));
        $res=$this->db->get()->row();
        
        return $res;
    }
}
?>