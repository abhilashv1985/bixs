<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author invisible
 */
class admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->genContents['load_css'] = array("pagelayouts.css", "controlstyles.css", "ajaxtabs/ajaxtabs.css", "adminsetup.css", "colorbox.css");
        $this->genContents['load_js'] = array("jquery-1.9.1.js", "jquery.colorbox.js", "datatype.js", "editModule.js", "jquery-ui.js","user.js");
        $this->menuContents['load_css'] = array("menustyle.css", "modulestyles.css", "editmodule.css", "user.css");
        $this->menuContents['load_js'] = array("jquery.styleSelect.js");
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('module_model');
    }

    public function index() {
        $this->load->view($this->config->item('site_page') . 'header', $this->genContents);
        $this->load->view($this->config->item('site_page') . 'topBanner');
        $this->load->view($this->config->item('site_page') . 'menu', $this->menuContents);
//        $this->load->view('pages/adminPanel');
        $this->load->view('admin/adminSetup');
        $this->load->view($this->config->item('site_page') . 'footer');
    }

}

?>
