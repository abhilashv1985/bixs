<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_model
 *
 * @author nijesh
 */
class user_model extends CI_Model{
    //put your code here
     public function __construct() {
        parent::__construct();        
        $this->load->database();
        $this->load->helper('date');
    }
    
    public function insertUser($data){
        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }
    
    public function getAllUser(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('status',1);
        $resultset = $this->db->get();
        return $resultset->result();
    }
    
    public function disableUser($userid){
//        $data = array(
//            'status' => 0
//        );
//        $this->db->where('id', $userid);
//        $result = $this->db->update('user', $data);
//        return ($this->db->affected_rows() > 0) ? true : false;
        
        
        $this->db->update('user', array('status' => 0), array('id' => $userid));
        return ($this->db->affected_rows() > 0) ? true : false;
    }
    
    public function getUserDetail($userid){
        $this->db->select('*');
        $this->db->where('id',$userid);
        $this->db->from('user');
        $resultset = $this->db->get();
        return $resultset->row();
    }
    
    public function updateUser($data, $userid){
        $this->db->update('user', $data, array('id' => $userid));
        return ($this->db->affected_rows() > 0) ? true : false;
    }
}
?>
