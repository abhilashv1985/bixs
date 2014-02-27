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
        $this->menuContents['load_js'] = array("jquery.js","jquery.styleSelect.js");
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('module_model');
    }

    public function index() {
        $this->load->view($this->config->item('site_page') . 'header', $this->genContents);
        $this->load->view($this->config->item('site_page') . 'topBanner');
        $this->load->view($this->config->item('site_page') . 'menu', $this->menuContents);
        $this->load->view('homeLayout');
        $this->load->view($this->config->item('site_page') . 'footer');
    }

    public function showModuleForm($moduleId) {
        if ($_POST) {
            $moduleContent = $this->module_model->getModuleContent($moduleId);
            $this->load->library('form_validation');
            $dataArray  = array();
            if($moduleContent){
                foreach ($moduleContent as $content) {
                    if ($content->is_required == 1) {
                        $this->form_validation->set_rules($content->field_id, $content->field_name, 'required');
                    }
                    $fieldName   = str_replace(' ', '_', $content->field_name);
                    $fieldValue  = $this->input->post($content->field_id);
                    $dataArray[$fieldName]  = $fieldValue;
                }                
            }
             if ($this->form_validation->run() === FALSE) {
                $this->session->set_flashdata('message', validation_errors());
                $this->session->set_flashdata('msg_class', 'error_message');
                redirect('clientmodulemanager/showModuleForm/'.$moduleId);
            }
            $this->module_model->saveModuleForm($dataArray);
        }
        @$data['moduleContent'] = $this->module_model->getModuleContent($moduleId);
        if ($data['moduleContent']) {
            $data['modulename']=  $this->module_model->getModuleName($moduleId);
            $data['lookupData']=  $this->module_model->getLookUpData($moduleId);
            $this->load->view($this->config->item('site_page') . 'header', $this->genContents);
            $this->load->view($this->config->item('site_page') . 'topBanner');
            $this->load->view($this->config->item('site_page') . 'menu', $this->menuContents);
            $this->load->view('moduleLayout', $data);
            $this->load->view($this->config->item('site_page') . 'footer');
        }
    }

  

}

?>
