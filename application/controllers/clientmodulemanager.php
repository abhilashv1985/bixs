<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clientmodulemanager
 *
 * @author Aarav
 */
class clientmodulemanager extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->genContents['load_css'] = array("pagelayouts.css", "controlstyles.css");
        $this->menuContents['load_css'] = array("menustyle.css");
        $this->menuContents['load_js'] = array("jquery.js", "module.js");
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('module_model');
    }

    public function index() {
        $userid = $this->session->userdata('userId');

        $data['taskinfo'] = $this->module_model->getTaskInfo($userid);

        $this->load->view($this->config->item('site_page') . 'header', $this->genContents);
        $this->load->view($this->config->item('site_page') . 'topBanner');
        $this->load->view($this->config->item('site_page') . 'menu', $this->menuContents);
        $this->load->view('homeLayout', $data);
        $this->load->view($this->config->item('site_page') . 'footer');
    }

    public function showModuleForm($moduleId) {
        $userid = $this->session->userdata('userId');
        if ($_POST) {
            $moduleContent = $this->module_model->getModuleContent($moduleId);
            if ($moduleContent) {
                $this->load->library('form_validation');
                $dataArray = array();
                $isRuleSet = false;
                if ($moduleContent) {
                    $dataArray['userid'] = $userid;
                    foreach ($moduleContent as $content) {
                        if ($content->is_required == 1) {
                            $isRuleSet = true;
                            $this->form_validation->set_rules($content->field_id, $content->field_name, 'required');
                        }
                        $fieldName = str_replace(' ', '_', $content->field_name);
                        $fieldValue = $this->input->post($content->field_id);
                        $dataArray[$fieldName] = $fieldValue;
                    }
                }
                if ($isRuleSet) {
                    if ($this->form_validation->run() == FALSE) {
                        //print_r($this->form_validation->run());die;
                        $this->session->set_flashdata('message', validation_errors());
                        $this->session->set_flashdata('msg_class', 'error_message');
                        redirect('clientmodulemanager/showModuleForm/' . $moduleId);
                    }
                }
                $this->module_model->saveModuleForm($dataArray);
            }
        }
        $data['moduleContent'] = $this->module_model->getModuleContent($moduleId);
        $data['moduleId']      = $moduleId; 
        if ($data['moduleContent']) {
            $data['modulename'] = $this->module_model->getModuleName($moduleId);
            $data['lookupData'] = $this->module_model->getLookUpData($moduleId);
            $this->load->view($this->config->item('site_page') . 'header', $this->genContents);
            $this->load->view($this->config->item('site_page') . 'topBanner');
            $this->load->view($this->config->item('site_page') . 'menu', $this->menuContents);
            $this->load->view('moduleLayout', $data);
            $this->load->view($this->config->item('site_page') . 'footer');
        }
    }

    public function export($moduleId){
        $userid = $this->session->userdata('userId');
        $this->load->library('excel');
        if($_POST){
            // excel file parse
            $this->load->library('upload');
            
            if (!empty($_FILES['importfile']['name'])){
                if(!is_dir("excel_import/$moduleId")){
                    mkdir("excel_import/$moduleId", 0777,true);
                }                
                $config['upload_path'] = "excel_import/$moduleId";
                $config['allowed_types'] = 'xls'; 
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('importfile')){
                    $file           = $this->upload->data();
                    $file_name      = $file['file_name'];
                    $filepath       = $config['upload_path'];
                    // $filepath.'/'.$file_name; die;
                }
            }
            $data['moduleContent'] = $this->module_model->getModuleContent($moduleId);
            $data['moduleId']      = $moduleId; 
            $data['excelFile']     = $filepath.'/'.$file_name; 
            if ($data['moduleContent']) {
                $data['modulename'] = $this->module_model->getModuleName($moduleId);
                $data['lookupData'] = $this->module_model->getLookUpData($moduleId);
                $this->load->view($this->config->item('site_page') . 'header', $this->genContents);
                $this->load->view($this->config->item('site_page') . 'topBanner');
                $this->load->view($this->config->item('site_page') . 'menu', $this->menuContents);
                $this->load->view('exportModuleLayout', $data);
                $this->load->view($this->config->item('site_page') . 'footer');                
            }
        }
        
        $data['moduleContent'] = $this->module_model->getModuleContent($moduleId);
        $data['moduleId']      = $moduleId; 
        if ($data['moduleContent'] && !$_POST) {
            $data['modulename']=  $this->module_model->getModuleName($moduleId);
            $data['lookupData']=  $this->module_model->getLookUpData($moduleId);
            $this->load->view($this->config->item('site_page') . 'header', $this->genContents);
            $this->load->view($this->config->item('site_page') . 'topBanner');
            $this->load->view($this->config->item('site_page') . 'menu', $this->menuContents);
            $this->load->view('moduleImport', $data);
            $this->load->view($this->config->item('site_page') . 'footer');
        }       
    }
}