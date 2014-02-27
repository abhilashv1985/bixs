<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of module_model
 *
 * @author nijesh
 */
class module_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('date');
    }

    public function insertModule() {
        $this->load->dbforge();
        $tablename = $this->input->post('txtModuleName');
        $data = array(
            'name' => $tablename,
            'description' => $this->input->post('txtDescription'),
            'last_modified' => date('Y-m-d H:i:s', now())
        );
        $this->db->insert('module', $data);
        $this->dbforge->add_field('id');
        $tablename = strtolower(str_replace(' ', '_', $tablename));
        $this->dbforge->create_table($tablename, TRUE);
    }

    public function getModuleFields() {
        $this->db->select('*');
        $this->db->from('module');
        $resultset = $this->db->get();
        return $resultset->result();
    }

    public function getmoduleList() {
        $this->db->select('*');
        $this->db->from('module');
        $resultset = $this->db->get();
        return $resultset->result();
    }

    public function insertModuleSection() {
        
        $this->db->select('id');
        $this->db->from('module_metadata_section');
        $this->db->where('moduleid', $this->input->post('moduleidfld'));
        $this->db->where('section_name', $this->input->post('txtSectionName'));
        $resultset = $this->db->get();
        $rowcount = $resultset->num_rows();
        if($rowcount >0){
            return 0;
        }
        $data = array(
            'saas_id' => 100,
            'moduleid' => $this->input->post('moduleidfld'),
            'sort_order' => $this->input->post('sectioncountfld'),
            'section_name' => $this->input->post('txtSectionName'),
            'last_modified' => date('Y-m-d H:i:s', now())
        );
        $this->db->insert('module_metadata_section', $data);
        
        return 1;
    }

    public function getDataType() {
        $this->db->select('*');
        $this->db->from('datatype');
        $resultset = $this->db->get();
        return $resultset->result();
    }

    public function getModuleSection($moduleid) {

        $this->db->select('*');
        $this->db->where('moduleid', $moduleid);
        $this->db->from('module_metadata_section');
        $resultset = $this->db->get();
        return $resultset->result();
    }

    public function getSectionCount($selectedModule = -1) {

        $this->db->select('*');
        $this->db->from('module_metadata_section');
        $this->db->where('moduleid', $selectedModule);
        $resultset = $this->db->get();
        $rowcount = $resultset->num_rows();
        return $rowcount;
    }

    public function getFieldCount($selectedsection = -1) {

        $this->db->select('*');
        $this->db->from('module_metadata_field');
        $this->db->where('section_id', $selectedsection);
        $resultset = $this->db->get();
        $rowcount = $resultset->num_rows();
        return $rowcount;
    }

    public function getModuleContent($moduleid) {
        $sqlquery = " SELECT mmsec.id, mmsec.section_name, mmsec.sort_order, 
                        mmfield.field_name,mmfield.field_id,mmfield.field_html,mmfield.is_required, mmfield.id AS meta_fieldid, mmfield.sort_order AS meta_fieldsort_order
                        FROM module_metadata_section mmsec
                        JOIN module_metadata_field mmfield ON mmfield.section_id = mmsec.id
                        WHERE mmsec.moduleid =$moduleid
                        ORDER BY mmsec.sort_order ASC ";
        $resultset = $this->db->query($sqlquery);
        return $resultset->result();
    }

    public function getLookUpData($moduleId) {
        $query = "select * from look_up where parentModId=$moduleId";
        $resultset = $this->db->query($query);
        return $resultset->result();
    }

    public function saveModuleForm($d) {
        $this->db->insert($this->input->post('modulename'), $d);
    }

    public function getModuleName($moduleid) {
        $this->db->select('name');
        $this->db->from('module');
        $this->db->where('id', $moduleid);
        $query = $this->db->get();
        return $query->row();
    }

    public function getModuleFieldData($moduleid) {
        $sqlQuery = "select field_name,field_id from module_metadata_field where module_id=$moduleid";
        $resultSet = $this->db->query($sqlQuery);
        return $resultSet->result();
    }

    public function insertLookUpData($data) {
        $this->db->insert('look_up', $data);
    }

}

?>
