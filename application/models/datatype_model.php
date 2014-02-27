<?php

class datatype_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->dbforge();
    }

    public function insertTextField() {

        $data = array(
            'label_name' => $this->input->post('txtFieldName'),
            'textsize' => $this->input->post('txtFieldLength'),
            'last_modified' => date('Y-m-d H:i:s', now())
        );

        $this->db->insert('datatype_text', $data);
        return $this->db->insert_id();
    }

    public function insertCheckboxField() {
        $data = array(
            'label_name' => $this->input->post('txtCheckBoxName'),
            'is_selected' => $this->input->post('ischeckboxactive'),
            'last_modified' => date('Y-m-d H:i:s', now())
        );

        $this->db->insert('datatype_checkbox', $data);
        return $this->db->insert_id();
    }

    public function insertIntegerField() {

        $data = array(
            'integer_name' => $this->input->post('txtIntegerName'),
            'length' => $this->input->post('txtIntegerLength'),
            'last_modified' => date('Y-m-d H:i:s', now())
        );

        $this->db->insert('datatype_integer', $data);
        return $this->db->insert_id();
    }

    public function insertPercentField() {
        $data = array(
            'label_name' => $this->input->post('txtPercentName'),
            'last_modified' => date('Y-m-d H:i:s', now())
        );

        $this->db->insert('datatype_percent', $data);
        return $this->db->insert_id();
    }

    public function insertDecimalField() {
        $data = array(
            'label_name' => $this->input->post('txtDecimalName'),
            'length' => $this->input->post('txtDecimalLength'),
            'decimal_place' => $this->input->post('txtDecimalUpto'),
            'last_modified' => date('Y-m-d H:i:s', now())
        );

        $this->db->insert('datatype_decimal', $data);
        return $this->db->insert_id();
    }

    public function insertCurrencyField() {

        $data = array(
            'label_name' => $this->input->post('txtCurrencyName'),
            'length' => $this->input->post('txtCurrencyLength'),
            'decimal_place' => $this->input->post('txtCurrencyDecimalUpto'),
            'last_modified' => date('Y-m-d H:i:s', now())
        );

        $this->db->insert('datatype_currency', $data);
        return $this->db->insert_id();
    }

    public function insertDateField() {

        $data = array(
            'label_name' => $this->input->post('txtDateName'),
            'last_modified' => date('Y-m-d H:i:s', now())
        );

        $this->db->insert('datatype_date', $data);
        return $this->db->insert_id();
    }

    public function insertDatetimeField() {

        $data = array(
            'label_name' => $this->input->post('txtDatetimeName'),
            'last_modified' => date('Y-m-d H:i:s', now())
        );
        $this->db->insert('datatype_datetime', $data);
        return $this->db->insert_id();
    }

    public function insertEmailField() {

        $data = array(
            'label_name' => $this->input->post('txtEmailName'),
            'last_modified' => date('Y-m-d H:i:s', now())
        );
        $this->db->insert('datatype_email', $data);
        return $this->db->insert_id();
    }

    public function insertPhoneField() {
        $data = array(
            'label_name' => $this->input->post('txtPhoneName'),
            'length' => $this->input->post('txtPhonelength'),
            'last_modified' => date('Y-m-d H:i:s', now())
        );
        $this->db->insert('datatype_phone', $data);
        return $this->db->insert_id();
    }

    public function insertPicklistField() {
        $data = array(
            'label_name' => $this->input->post('txtPickListName'),
            'list_value' => $this->input->post('txtPickListContent'),
            'use_first_asdefault' => $this->input->post('isfirstitemselected'),
            'last_modified' => date('Y-m-d H:i:s', now())
        );
        $this->db->insert('datatype_picklist', $data);
        return $this->db->insert_id();
    }

    public function insertUrlField() {
        $data = array(
            'label_name' => $this->input->post('txtUrlName'),
            'length' => $this->input->post('txtUrlLength'),
            'last_modified' => date('Y-m-d H:i:s', now())
        );
        $this->db->insert('datatype_url', $data);
        return $this->db->insert_id();
    }

    public function insertTextareaField() {
        $data = array(
            'label_name' => $this->input->post('txtTextAreaName'),
            'last_modified' => date('Y-m-d H:i:s', now())
        );
        $this->db->insert('datatype_textarea', $data);
        return $this->db->insert_id();
    }

    public function insertMSPicklistField() {
        $data = array(
            'label_name' => $this->input->post('txtMSPickListName'),
            'list_value' => $this->input->post('txtMSPickListContent'),
            'use_first_asdefault' => $this->input->post('isfirstitemselected'),
            'last_modified' => date('Y-m-d H:i:s', now())
        );
        $this->db->insert('datatype_multiselect_picklist', $data);
        return $this->db->insert_id();
    }

    public function insertmoduleField($data) {

        $this->db->insert('module_metadata_field', $data);
        $fieldName = str_replace(' ', '_', $data['field_name']);
        $moduleName = $this->input->post('modulename_fld');
        $fields = array(
            $fieldName => array('type' => 'TEXT')
        );
        $this->dbforge->add_column($moduleName, $fields);
    }

}

?>
