<?php


class General_model extends CI_Model {
    
    public function insertTableData($tableName='',$data=''){
        $this->db->insert($tableName,$data);
        return true;
    }
    
    public function get_category($cat_type) {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('id',$cat_type);
        $result=$this->db->get()->result();
        
        
        return $result;
    }
    
    public function update_category_byid($data,$id){
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('id',$id);
        $this->db->update('category',$data);
        return TRUE;
        
    }
    public function get_category_by_ajax($id){
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('cat_type',$id);
        $result=$this->db->get()->result();
        return $result;
    }
}
?>