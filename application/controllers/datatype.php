<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of datatype
 *
 * @author nijesh
 */
class datatype extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('module_model');
        $this->load->model('datatype_model');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function showTextPanel() {
        if ($this->input->post() && !$this->input->post('showOnlyForm')) {
            $fieldname = $this->input->post('txtFieldName');
            $fieldlength = $this->input->post('txtFieldLength');
            $section = $this->input->post('ddlSection');

            if ((trim($fieldname) == "") || (trim($fieldlength) == "")) {
                die('0');
            }
            if ($section == 0) {
                //print_r($section);
                die('-1');
            }
            //print_r(' $this->form_validation->run() is true');
            $values['field_id'] = $this->datatype_model->insertTextField();
            $values['parent_id'] = 1;
            $values['sectionid'] = $this->input->post('ddlSection');
            $values['fieldcount'] = $this->module_model->getFieldCount($values['sectionid']);
            $fieldname = $this->input->post('txtFieldName');
            $fieldname = trim($fieldname);
            $fieldid = strtolower(str_replace(' ', '_', $fieldname)) . '_' . $values['field_id'];
            $controlHtml = '<input type="text" id="' . $fieldid . '" name="' . $fieldid . '" maxlength="' . $this->input->post('txtFieldLength') . '" />';
            $data = array(
                'saas_id' => 100,
                'module_id' => $this->input->post('moduleid_fld'),
                'field_name' => $fieldname,
                'field_id' => $fieldid,
                'field_html' => $controlHtml,
                'parent_datatype_id' => $values['parent_id'],
                'datatype_id' => $values['field_id'],
                'sort_order' => $values['fieldcount']++,
                'section_id' => $values['sectionid'],
                'is_deletable' => 0,
                'last_modified' => date('Y-m-d H:i:s', now())
            );
            $this->datatype_model->insertModuleField($data);
            die('1');
        }
        $data['moduleid'] = $this->input->post('moduleid');
        $data['modulename'] = $this->input->post('modulename');
        $data['section'] = $this->module_model->getModuleSection($data['moduleid']);
        $this->load->view('panels/showaddtextpanel', $data);
    }

    public function showCheckboxPanel() {
        if ($this->input->post() && !$this->input->post('showOnlyForm')) {
            $fieldname = $this->input->post('txtCheckBoxName');
            $section = $this->input->post('ddlSection');

            if (trim($fieldname) == "") {
                die('0');
            }
            if ($section == 0) {
                //print_r($section);
                die('-1');
            }

            $values['field_id'] = $this->datatype_model->insertCheckboxField();
            $values['parent_id'] = 2;
            $values['sectionid'] = $this->input->post('ddlSection');
            $fieldname = $this->input->post('txtCheckBoxName');
            $fieldname = trim($fieldname);
            $fieldid = strtolower(str_replace(' ', '_', $fieldname)) . '_' . $values['field_id'];
            $values['fieldcount'] = $this->module_model->getFieldCount($values['sectionid']);
            if ($this->input->post('ischeckboxactive') == 1) {
                $checked = "true";
            } else {
                $checked = "false";
            }
            $controlHtml = '<input type="checkbox" id="' . $fieldid . '" name="' . $fieldid . '"  value="1" checked=' . $checked . ' />';
            $data = array(
                'saas_id' => 100,
                'module_id' => $this->input->post('moduleid_fld'),
                'field_name' => $fieldname,
                'field_id' => $fieldid,
                'field_html' => $controlHtml,
                'parent_datatype_id' => $values['parent_id'],
                'datatype_id' => $values['field_id'],
                'sort_order' => $values['fieldcount']++,
                'section_id' => $values['sectionid'],
                'is_deletable' => 0,
                'last_modified' => date('Y-m-d H:i:s', now())
            );
            $this->datatype_model->insertModuleField($data);

            die('1');
        }
        $data['moduleid'] = $this->input->post('moduleid');
        $data['modulename'] = $this->input->post('modulename');
        $data['section'] = $this->module_model->getModuleSection($data['moduleid']);
        $this->load->view('panels/showcheckboxpanel', $data);
    }

    public function showIntegerPanel() {
        if ($this->input->post() && !$this->input->post('showOnlyForm')) {
//            $this->form_validation->set_rules('txtIntegerName', 'Integer Name', 'required');
//            $this->form_validation->set_rules('txtIntegerLength', 'Integer length', 'required');
            $fieldname = $this->input->post('txtIntegerName');
            $fieldlength = $this->input->post('txtIntegerLength');
            $section = $this->input->post('ddlSection');

            if ((trim($fieldname) == "") || (trim($fieldlength) == "")) {
                die('0');
            }
            if ($section == 0) {
                //print_r($section);
                die('-1');
            }

            $values['field_id'] = $this->datatype_model->insertIntegerField();
            $values['parent_id'] = 3;
            $values['sectionid'] = $this->input->post('ddlSection');
            $values['fieldcount'] = $this->module_model->getFieldCount($values['sectionid']);
            $fieldname = $this->input->post('txtIntegerName');
            $fieldname = trim($fieldname);
            $fieldid = strtolower(str_replace(' ', '_', $fieldname)) . '_' . $values['field_id'];
            $controlHtml = '<input type="number" id="' . $fieldid . '" name="' . $fieldid . '" maxlength="' . $this->input->post('txtIntegerLength') . '" />';
            $data = array(
                'saas_id' => 100,
                'module_id' => $this->input->post('moduleid_fld'),
                'field_name' => $fieldname,
                'field_id' => $fieldid,
                'field_html' => $controlHtml,
                'parent_datatype_id' => $values['parent_id'],
                'datatype_id' => $values['field_id'],
                'sort_order' => $values['fieldcount']++,
                'section_id' => $values['sectionid'],
                'is_deletable' => 0,
                'last_modified' => date('Y-m-d H:i:s', now())
            );
            $this->datatype_model->insertModuleField($data);

            die('1');
        }
        $data['moduleid'] = $this->input->post('moduleid');
        $data['modulename'] = $this->input->post('modulename');
        $data['section'] = $this->module_model->getModuleSection($data['moduleid']);
        $this->load->view('panels/showintegerpanel', $data);
    }

    public function showPercentPanel() {
        if ($this->input->post() && !$this->input->post('showOnlyForm')) {
            $this->form_validation->set_rules('txtPercentName', 'Integer Name', 'required');
            $fieldname = $this->input->post('txtPercentName');
            $section = $this->input->post('ddlSection');

            if ((trim($fieldname) == "") || (trim($fieldlength) == "")) {
                die('0');
            }
            if ($section == 0) {
                //print_r($section);
                die('-1');
            }

            $values['field_id'] = $this->datatype_model->insertPercentField();
            $values['parent_id'] = 4;
            $values['sectionid'] = $this->input->post('ddlSection');
            $values['fieldcount'] = $this->module_model->getFieldCount($values['sectionid']);
            $fieldname = $this->input->post('txtPercentName');
            $fieldname = trim($fieldname);
            $fieldid = strtolower(str_replace(' ', '_', $fieldname)) . '_' . $values['field_id'];
            $controlHtml = '<input type="text" id="' . $fieldid . '" name="' . $fieldid . '" />';
            $data = array(
                'saas_id' => 100,
                'module_id' => $this->input->post('moduleid_fld'),
                'field_name' => $fieldname,
                'field_id' => $fieldid,
                'field_html' => $controlHtml,
                'parent_datatype_id' => $values['parent_id'],
                'datatype_id' => $values['field_id'],
                'sort_order' => $values['fieldcount']++,
                'section_id' => $values['sectionid'],
                'is_deletable' => 0,
                'last_modified' => date('Y-m-d H:i:s', now())
            );
            $this->datatype_model->insertModuleField($data);

            die('1');
        }
        $data['moduleid'] = $this->input->post('moduleid');
        $data['modulename'] = $this->input->post('modulename');
        $data['section'] = $this->module_model->getModuleSection($data['moduleid']);
        $this->load->view('panels/showpercentpanel', $data);
    }

    public function showDecimalPanel() {
        if ($this->input->post() && !$this->input->post('showOnlyForm')) {
//            $this->form_validation->set_rules('txtDecimalName', 'Decimal Name', 'required');
//            $this->form_validation->set_rules('txtDecimalLength', 'Decimal length', 'required');
//            $this->form_validation->set_rules('txtDecimalUpto', 'Decimal upto', 'required');
            $fieldname = $this->input->post('txtDecimalName');
            $fieldlength = $this->input->post('txtDecimalLength');
            $decimalupto = $this->input->post('txtDecimalUpto');
            $section = $this->input->post('ddlSection');

            if ((trim($fieldname) == "") || (trim($fieldlength) == "") || (trim($decimalupto) == "")) {
                die('0');
            }
            if ($section == 0) {
                //print_r($section);
                die('-1');
            }

            $values['field_id'] = $this->datatype_model->insertDecimalField();
            $values['parent_id'] = 5;
            $values['sectionid'] = $this->input->post('ddlSection');
            $values['fieldcount'] = $this->module_model->getFieldCount($values['sectionid']);
            $fieldname = $this->input->post('txtDecimalName');
            $fieldname = trim($fieldname);
            $fieldid = strtolower(str_replace(' ', '_', $fieldname)) . '_' . $values['field_id'];
            $controlHtml = '<input type="text" id="' . $fieldid . '" name="' . $fieldid . '" maxlength="' . $this->input->post('txtDecimalLength') . '" />';
            $data = array(
                'saas_id' => 100,
                'module_id' => $this->input->post('moduleid_fld'),
                'field_name' => $this->input->post('txtDecimalName'),
                'field_id' => $fieldid,
                'field_html' => $controlHtml,
                'parent_datatype_id' => $values['parent_id'],
                'datatype_id' => $values['field_id'],
                'sort_order' => $values['fieldcount']++,
                'section_id' => $values['sectionid'],
                'is_deletable' => 0,
                'last_modified' => date('Y-m-d H:i:s', now())
            );
            $this->datatype_model->insertModuleField($data);

            die('1');
        }
        $data['moduleid'] = $this->input->post('moduleid');
        $data['modulename'] = $this->input->post('modulename');
        $data['section'] = $this->module_model->getModuleSection($data['moduleid']);
        $this->load->view('panels/showdecimalpanel', $data);
    }

    public function showCurrencyPanel() {

        if ($this->input->post() && !$this->input->post('showOnlyForm')) {
//            $this->form_validation->set_rules('txtCurrencyName', 'Currency Name', 'required');
//            $this->form_validation->set_rules('txtCurrencyLength', 'Currency length', 'required');
//            $this->form_validation->set_rules('txtCurrencyDecimalUpto', 'Currency Decimal upto', 'required');
            $fieldname = $this->input->post('txtCurrencyName');
            $fieldlength = $this->input->post('txtCurrencyLength');
            $decimalupto = $this->input->post('txtCurrencyDecimalUpto');
            $section = $this->input->post('ddlSection');

            if ((trim($fieldname) == "") || (trim($fieldlength) == "") || (trim($decimalupto) == "")) {
                die('0');
            }
            if ($section == 0) {
                //print_r($section);
                die('-1');
            }

            $values['field_id'] = $this->datatype_model->insertCurrencyField();
            $values['parent_id'] = 6;
            $values['sectionid'] = $this->input->post('ddlSection');
            $values['fieldcount'] = $this->module_model->getFieldCount($values['sectionid']);
            $fieldname = $this->input->post('txtCurrencyName');
            $fieldname = trim($fieldname);
            $fieldid = strtolower(str_replace(' ', '_', $fieldname)) . '_' . $values['field_id'];
            $controlHtml = '<input type="text" id="' . $fieldid . '" name="' . $fieldid . '" maxlength="' . $this->input->post('txtCurrencyLength') . '" />';
            $data = array(
                'saas_id' => 100,
                'module_id' => $this->input->post('moduleid_fld'),
                'field_name' => $this->input->post('txtCurrencyName'),
                'field_id' => $fieldid,
                'field_html' => $controlHtml,
                'parent_datatype_id' => $values['parent_id'],
                'datatype_id' => $values['field_id'],
                'sort_order' => $values['fieldcount']++,
                'section_id' => $values['sectionid'],
                'is_deletable' => 0,
                'last_modified' => date('Y-m-d H:i:s', now())
            );
            $this->datatype_model->insertModuleField($data);
            die('1');
        }
        $data['moduleid'] = $this->input->post('moduleid');
        $data['modulename'] = $this->input->post('modulename');
        $data['section'] = $this->module_model->getModuleSection($data['moduleid']);
        $this->load->view('panels/showcurrencypanel', $data);
    }

    public function showDatePanel() {
        if ($this->input->post() && !$this->input->post('showOnlyForm')) {
//            $this->form_validation->set_rules('txtDateName', 'date', 'required');
            $fieldname = $this->input->post('txtDateName');
            $section = $this->input->post('ddlSection');

            if (trim($fieldname) == "") {
                die('0');
            }
            if ($section == 0) {
                //print_r($section);
                die('-1');
            }

            $values['field_id'] = $this->datatype_model->insertDateField();
            $values['parent_id'] = 7;
            $values['sectionid'] = $this->input->post('ddlSection');
            $values['fieldcount'] = $this->module_model->getFieldCount($values['sectionid']);
            $fieldname = $this->input->post('txtDateName');
            $fieldname = trim($fieldname);
            $fieldid = strtolower(str_replace(' ', '_', $fieldname)) . '_' . $values['field_id'];
            $controlHtml = '<input type="text" id="' . $fieldid . '" name="' . $fieldid . '" />';
            $data = array(
                'saas_id' => 100,
                'module_id' => $this->input->post('moduleid_fld'),
                'field_name' => $this->input->post('txtDateName'),
                'field_id' => $fieldid,
                'field_html' => $controlHtml,
                'parent_datatype_id' => $values['parent_id'],
                'datatype_id' => $values['field_id'],
                'sort_order' => $values['fieldcount']++,
                'section_id' => $values['sectionid'],
                'is_deletable' => 0,
                'last_modified' => date('Y-m-d H:i:s', now())
            );
            $this->datatype_model->insertModuleField($data);
            die('1');
        }
        $data['moduleid'] = $this->input->post('moduleid');
        $data['modulename'] = $this->input->post('modulename');
        $data['section'] = $this->module_model->getModuleSection($data['moduleid']);
        $this->load->view('panels/showdatepanel', $data);
    }

    public function showDatetimePanel() {
        if ($this->input->post() && !$this->input->post('showOnlyForm')) {
//            $this->form_validation->set_rules('txtDatetimeName', 'Date timeName', 'required');
            $fieldname = $this->input->post('txtDatetimeName');
            $section = $this->input->post('ddlSection');

            if (trim($fieldname) == "") {
                die('0');
            }
            if ($section == 0) {
                //print_r($section);
                die('-1');
            }

            $values['field_id'] = $this->datatype_model->insertDatetimeField();
            $values['parent_id'] = 8;
            $values['sectionid'] = $this->input->post('ddlSection');
            $values['fieldcount'] = $this->module_model->getFieldCount($values['sectionid']);
            $fieldname = $this->input->post('txtDatetimeName');
            $fieldname = trim($fieldname);
            $fieldid = strtolower(str_replace(' ', '_', $fieldname)) . '_' . $values['field_id'];
            $controlHtml = '<input type="text" id="' . $fieldid . '" name="' . $fieldid . '" />';
            $data = array(
                'saas_id' => 100,
                'module_id' => $this->input->post('moduleid_fld'),
                'field_name' => $fieldname,
                'field_id' => $fieldid,
                'field_html' => $controlHtml,
                'parent_datatype_id' => $values['parent_id'],
                'datatype_id' => $values['field_id'],
                'sort_order' => $values['fieldcount']++,
                'section_id' => $values['sectionid'],
                'is_deletable' => 0,
                'last_modified' => date('Y-m-d H:i:s', now())
            );
            $this->datatype_model->insertModuleField($data);
            die('1');
        }
        $data['moduleid'] = $this->input->post('moduleid');
        $data['modulename'] = $this->input->post('modulename');
        $data['section'] = $this->module_model->getModuleSection($data['moduleid']);
        $this->load->view('panels/showdatetimepanel', $data);
    }

    public function showEmailPanel() {
        if ($this->input->post() && !$this->input->post('showOnlyForm')) {
//            $this->form_validation->set_rules('txtEmailName', 'Date time Name', 'required');
            $fieldname = $this->input->post('txtEmailName');
            $section = $this->input->post('ddlSection');

            if (trim($fieldname) == "") {
                die('0');
            }
            if ($section == 0) {
                //print_r($section);
                die('-1');
            }

            $values['field_id'] = $this->datatype_model->insertEmailField();
            $values['parent_id'] = 9;
            $values['sectionid'] = $this->input->post('ddlSection');
            $values['fieldcount'] = $this->module_model->getFieldCount($values['sectionid']);
            $fieldname = $this->input->post('txtEmailName');
            $fieldname = trim($fieldname);
            $fieldid = strtolower(str_replace(' ', '_', $fieldname)) . '_' . $values['field_id'];
            $controlHtml = '<input type="text" id="' . $fieldid . '" name="' . $fieldid . '" />';
            $data = array(
                'saas_id' => 100,
                'module_id' => $this->input->post('moduleid_fld'),
                'field_name' => $fieldname,
                'field_id' => $fieldid,
                'field_html' => $controlHtml,
                'parent_datatype_id' => $values['parent_id'],
                'datatype_id' => $values['field_id'],
                'sort_order' => $values['fieldcount']++,
                'section_id' => $values['sectionid'],
                'is_deletable' => 0,
                'last_modified' => date('Y-m-d H:i:s', now())
            );
            $this->datatype_model->insertModuleField($data);
            die('1');
        }
        $data['moduleid'] = $this->input->post('moduleid');
        $data['modulename'] = $this->input->post('modulename');
        $data['section'] = $this->module_model->getModuleSection($data['moduleid']);
        $this->load->view('panels/showemailpanel', $data);
    }

    public function showPhonePanel() {
        if ($this->input->post() && !$this->input->post('showOnlyForm')) {
//            $this->form_validation->set_rules('txtPhoneName', 'Phone Name', 'required');
//            $this->form_validation->set_rules('txtPhonelength', 'Phone Name', 'required');
            $fieldname = $this->input->post('txtPhoneName');
            $fieldlength = $this->input->post('txtPhonelength');
            $section = $this->input->post('ddlSection');

            if ((trim($fieldname) == "") || (trim($fieldlength) == "")) {
                die('0');
            }
            if ($section == 0) {
                //print_r($section);
                die('-1');
            }
            $values['field_id'] = $this->datatype_model->insertPhoneField();
            $values['parent_id'] = 10;
            $values['sectionid'] = $this->input->post('ddlSection');
            $values['fieldcount'] = $this->module_model->getFieldCount($values['sectionid']);
            $fieldname = $this->input->post('txtPhoneName');
            $fieldname = trim($fieldname);
            $fieldid = strtolower(str_replace(' ', '_', $fieldname)) . '_' . $values['field_id'];
            $controlHtml = '<input type="text" id="' . $fieldid . '" name="' . $fieldid . '" />';
            $data = array(
                'saas_id' => 100,
                'module_id' => $this->input->post('moduleid_fld'),
                'field_name' => $fieldname,
                'field_id' => $fieldid,
                'field_html' => $controlHtml,
                'parent_datatype_id' => $values['parent_id'],
                'datatype_id' => $values['field_id'],
                'sort_order' => $values['fieldcount']++,
                'section_id' => $values['sectionid'],
                'is_deletable' => 0,
                'last_modified' => date('Y-m-d H:i:s', now())
            );
            $this->datatype_model->insertModuleField($data);
            die('1');
        }
        $data['moduleid'] = $this->input->post('moduleid');
        $data['modulename'] = $this->input->post('modulename');
        $data['section'] = $this->module_model->getModuleSection($data['moduleid']);
        $this->load->view('panels/showphonepanel', $data);
    }

    public function showPicklistPanel() {
        if ($this->input->post() && !$this->input->post('showOnlyForm')) {
//            $this->form_validation->set_rules('txtPickListName', 'Date timeName', 'required');
//            $this->form_validation->set_rules('txtPickListContent', 'Date timeName', 'required');
            $fieldname = $this->input->post('txtPickListName');
            $fieldcontnt = $this->input->post('txtPickListContent');
            $section = $this->input->post('ddlSection');

            if ((trim($fieldname) == "") || (trim($fieldcontnt) == "")) {
                die('0');
            }
            if ($section == 0) {
                //print_r($section);
                die('-1');
            }
            $values['field_id'] = $this->datatype_model->insertPicklistField();
            $values['parent_id'] = 11;
            $values['sectionid'] = $this->input->post('ddlSection');
            $values['fieldcount'] = $this->module_model->getFieldCount($values['sectionid']);
            $fieldname = $this->input->post('txtPickListName');
            $fieldname = trim($fieldname);
            $fieldid = strtolower(str_replace(' ', '_', $fieldname)) . '_' . $values['field_id'];
            $optionstring = $this->input->post('txtPickListContent');
            $optionarray = explode(',', $optionstring);
            $options = "";
            for ($i = 0; $i < count($optionarray); $i++) {
                $options = $options . '<option>' . $optionarray[$i] . '</option>';
            }
            $controlHtml = '<select id="' . $fieldid . '" name="' . $fieldid . '">' . $options . '</select>';
            $data = array(
                'saas_id' => 100,
                'module_id' => $this->input->post('moduleid_fld'),
                'field_name' => $fieldname,
                'field_id' => $fieldid,
                'field_html' => $controlHtml,
                'parent_datatype_id' => $values['parent_id'],
                'datatype_id' => $values['field_id'],
                'sort_order' => $values['fieldcount']++,
                'section_id' => $values['sectionid'],
                'is_deletable' => 0,
                'last_modified' => date('Y-m-d H:i:s', now())
            );
            $this->datatype_model->insertModuleField($data);
            die('1');
        }
        $data['moduleid'] = $this->input->post('moduleid');
        $data['modulename'] = $this->input->post('modulename');
        $data['section'] = $this->module_model->getModuleSection($data['moduleid']);
        $this->load->view('panels/showpicklistpanel', $data);
    }

    public function showUrlPanel() {
        if ($this->input->post() && !$this->input->post('showOnlyForm')) {
            $this->form_validation->set_rules('txtUrlName', 'URL Name', 'required');
            $this->form_validation->set_rules('txtUrlLength', 'URL length', 'required');
            $fieldname = $this->input->post('txtUrlName');
            $fieldlength = $this->input->post('txtUrlLength');
            $section = $this->input->post('ddlSection');

            if ((trim($fieldname) == "") || (trim($fieldlength) == "")) {
                die('0');
            }
            if ($section == 0) {
                //print_r($section);
                die('-1');
            }
                $values['field_id'] = $this->datatype_model->insertUrlField();
                $values['parent_id'] = 12;
                $values['sectionid'] = $this->input->post('ddlSection');
                $values['fieldcount'] = $this->module_model->getFieldCount($values['sectionid']);
                $fieldname = $this->input->post('txtUrlName');
                $fieldname = trim($fieldname);
                $fieldid = strtolower(str_replace(' ', '_', $fieldname)) . '_' . $values['field_id'];
                $controlHtml = '<input type="text" id="' . $fieldid . '" name="' . $fieldid . '"maxlength="' . $this->input->post('txtUrlLength') . '" />';
                $data = array(
                    'saas_id' => 100,
                    'module_id' => $this->input->post('moduleid_fld'),
                    'field_name' => $fieldname,
                    'field_id' => $fieldid,
                    'field_html' => $controlHtml,
                    'parent_datatype_id' => $values['parent_id'],
                    'datatype_id' => $values['field_id'],
                    'sort_order' => $values['fieldcount']++,
                    'section_id' => $values['sectionid'],
                    'is_deletable' => 0,
                    'last_modified' => date('Y-m-d H:i:s', now())
                );
                $this->datatype_model->insertModuleField($data);
            die('1');
        }
        $data['moduleid'] = $this->input->post('moduleid');
        $data['modulename'] = $this->input->post('modulename');
        $data['section'] = $this->module_model->getModuleSection($data['moduleid']);
        $this->load->view('panels/showurlpanel', $data);
    }

    public function showTextareaPanel() {
        if ($this->input->post() && !$this->input->post('showOnlyForm')) {
            $this->form_validation->set_rules('txtTextAreaName', 'Textarea Name', 'required');
            $fieldname = $this->input->post('txtTextAreaName');
            $section = $this->input->post('ddlSection');

            if (trim($fieldname) == "") {
                die('0');
            }
            if ($section == 0) {
                //print_r($section);
                die('-1');
            }
                $values['field_id'] = $this->datatype_model->insertTextareaField();
                $values['parent_id'] = 13;
                $values['sectionid'] = $this->input->post('ddlSection');
                $values['fieldcount'] = $this->module_model->getFieldCount($values['sectionid']);
                $fieldname = $this->input->post('txtTextAreaName');
                $fieldname = trim($fieldname);
                $fieldid = strtolower(str_replace(' ', '_', $fieldname)) . '_' . $values['field_id'];
                $controlHtml = '<input type="text" id="' . $fieldid . '" name="' . $fieldid . '" />';
                $data = array(
                    'saas_id' => 100,
                    'module_id' => $this->input->post('moduleid_fld'),
                    'field_name' => $fieldname,
                    'field_id' => $fieldid,
                    'field_html' => $controlHtml,
                    'parent_datatype_id' => $values['parent_id'],
                    'datatype_id' => $values['field_id'],
                    'sort_order' => $values['fieldcount']++,
                    'section_id' => $values['sectionid'],
                    'is_deletable' => 0,
                    'last_modified' => date('Y-m-d H:i:s', now())
                );
                $this->datatype_model->insertModuleField($data);
            die('1');
        }
        $data['moduleid'] = $this->input->post('moduleid');
        $data['modulename'] = $this->input->post('modulename');
        $data['section'] = $this->module_model->getModuleSection($data['moduleid']);
        $this->load->view('panels/showtextareapanel', $data);
    }

    public function showMSPicklistPanel() {
        if ($this->input->post() && !$this->input->post('showOnlyForm')) {
            $this->form_validation->set_rules('txtMSPickListName', 'Multi select Picklist Name', 'required');
            $this->form_validation->set_rules('txtMSPickListContent', 'Multi select Picklist Name', 'required');
            $fieldname = $this->input->post('txtMSPickListName');
            $fieldlength = $this->input->post('txtMSPickListContent');
            $section = $this->input->post('ddlSection');

            if ((trim($fieldname) == "") || (trim($fieldlength) == "")) {
                die('0');
            }
            if ($section == 0) {
                //print_r($section);
                die('-1');
            }
                $values['field_id'] = $this->datatype_model->insertMSPicklistField();
                $values['parent_id'] = 14;
                $values['sectionid'] = $this->input->post('ddlSection');
                $values['fieldcount'] = $this->module_model->getFieldCount($values['sectionid']);
                $fieldname = $this->input->post('txtMSPickListName');
                $fieldname = trim($fieldname);
                $fieldid = strtolower(str_replace(' ', '_', $fieldname)) . '_' . $values['field_id'];
                $optionstring = $this->input->post('txtMSPickListContent');
                $optionarray = explode(',', $optionstring);
                $options = "";
                for ($i = 0; $i < count($optionarray); $i++) {
                    $options = $options . '<option>' . $optionarray[$i] . '</option>';
                }
                $controlHtml = '<select id="' . $fieldid . '" name="' . $fieldid . '">' . $options . '</select>';
                $data = array(
                    'saas_id' => 100,
                    'module_id' => $this->input->post('moduleid_fld'),
                    'field_name' => $fieldname,
                    'field_id' => $fieldid,
                    'field_html' => $controlHtml,
                    'parent_datatype_id' => $values['parent_id'],
                    'datatype_id' => $values['field_id'],
                    'sort_order' => $values['fieldcount']++,
                    'section_id' => $values['sectionid'],
                    'is_deletable' => 0,
                    'last_modified' => date('Y-m-d H:i:s', now())
                );
                $this->datatype_model->insertModuleField($data);
            die('1');
        }
        $data['moduleid'] = $this->input->post('moduleid');
        $data['modulename'] = $this->input->post('modulename');
        $data['section'] = $this->module_model->getModuleSection($data['moduleid']);
        $this->load->view('panels/showmspicklistpanel', $data);
    }

}
?>
