<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modulesectionfields
 *
 * @author Aarav
 */
class module extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('module_model');
        $this->load->helper('form');
        $this->load->library('session');
        $data['load_css'] = array("modulestyles.css", "colorbox.css", "editmodule.css", "controlstyles.css");
        $data['load_js'] = array("jquery-1.9.1.js", "jquery.colorbox.js", "datatype.js", "editModule.js", "jquery-ui.js");
    }

    public function ShowAdminModule() {

        $this->load->view('module');
    }

    public function displayModule() {
//        $this->load->view('template/header', $data);
        $this->load->view('addModule');
//        $this->load->view('template/footer');
    }

    public function editModule() {
        $data['module_list'] = $this->module_model->getmoduleList();

        //$this->load->view('template/header', $data);
        $this->load->view('editModule', $data);
        //$this->load->view('template/footer');
    }

    public function updateFieldPosition() {
        if ($_POST) {
            $pos = 1;
            foreach ($_POST as $fieldId => $order) {
                $this->module_model->updateFieldPosition($fieldId, $pos);
                $pos++;
            }
        }
    }

    public function displayModuleSection() {
        $selectedModule = $this->input->post('moduleid');
        $data['ModuleName'] = $this->input->post('modulename');
        $data['selectedModule'] = $selectedModule;
        $data['section_count'] = $this->module_model->getSectionCount($selectedModule);
        $this->load->view('AddModuleSection', $data);
    }

    public function displayModuleFields() {
        $data['selectedModule'] = $this->input->post('moduleid');
        $data['ModuleName'] = $this->input->post('modulename');
        $this->load->view('AddModuleFields', $data);
    }

    public function addModule() {
        $this->module_model->insertModule();
        $this->displayModule();
    }

    public function addModuleSection() {
        $sectionName = $this->input->post('txtSectionName');
        if ((trim($sectionName) == "")) {
            die('0');
        }
        $rowcount = $this->module_model->getSectionCount($this->input->post('moduleidfld'));
        $data = array(
            'saas_id' => 100,
            'moduleid' => $this->input->post('moduleidfld'),
            'sort_order' => ++$rowcount,
            'section_name' => $this->input->post('txtSectionName'),
            'last_modified' => date('Y-m-d H:i:s', now())
        );
        $ret = $this->module_model->insertModuleSection($data);
        if ($ret == 0)
            die('-1');
        else if ($ret == 1) {
            die('1');
        } else {
            die('-2');
        }

        //$this->editModule();
    }

    public function setLookUpFields() {
        $data['module_list'] = $this->module_model->getmoduleList();
        $data['moduleid'] = $this->input->post('moduleid');
        $data['ModuleName'] = $this->input->post('modulename');
        $data['moduleFields'] = $this->module_model->getModuleFieldData($data['moduleid']);
        $this->load->view('pages/AddLookUpFields', $data);
    }

    // To get all section and fields name for module id
    public function getModuleContent() {
        $data['moduleid'] = $this->input->post('moduleid');
        $data['moduleContent'] = $this->module_model->getModuleContent($data['moduleid']);
        $this->load->view('pages/showModuleContent', $data);
    }

    public function getModuleLookUpContent() {
        $data['parentModuleId'] = $this->input->post('parentModuleId');
        $data['parentModuleFieldId'] = $this->input->post('parentModFieldId');
        $data['lookUpModuleid'] = $this->input->post('lookUpModuleid');
        $data['moduleContent'] = $this->module_model->getModuleContent($data['lookUpModuleid']);
        $this->load->view('pages/lookUpModuleContent', $data);
    }

    public function saveLookUpData() {
        if ($_POST) {
            $lookUpFieldIds = '';
            $ModuleData = '';
            $count = 1;
            foreach ($_POST as $value) {
                if ($count == 1) {
                    $ModuleData = $value;
                }
                if ($count > 1) {
                    $lookUpFieldIds = $lookUpFieldIds . $value . ',';
                }
                $count++;
                //print_r($d);
            }
            $ParentModuleData = explode('-', $ModuleData);
            $data = array(
                'parentModId' => $ParentModuleData[0],
                'parentFieldId' => $ParentModuleData[1],
                'lookUpModId' => $ParentModuleData[2],
                'lookUpFieldIds' => $lookUpFieldIds
            );
            $this->module_model->insertLookUpData($data);
            // print_r($data);
            //print_r('value is '.$this->input->post('moduleidfld'));
        }
    }

}

?>
