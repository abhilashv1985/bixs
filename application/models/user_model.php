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
        $resultset = $this->db->get();
        return $resultset->result();
    }
}
?>
