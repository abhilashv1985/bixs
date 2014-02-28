<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author nijesh
 */
class user extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('user_model');
        $this->load->helper('form');
        $this->load->library('session');
        $data['load_css'] = array("modulestyles.css", "colorbox.css", "editmodule.css", "controlstyles.css", "user.css");
        $data['load_js'] = array("jquery-1.9.1.js", "jquery.colorbox.js", "datatype.js", "editModule.js", "jquery-ui.js", "user.js");
    }

    public function showUsers() {
        // get user details to list.
        $data["user_details"] = $this->user_model->getAllUser();
        $this->load->view('user/user', $data);
    }

    public function showAddUserPage() {
        if ($_POST) {
            // validation
            $txtCompany = $this->input->post('txtCompany');
            if(!trim($txtCompany) ){
                die("Please enter company");
            }
            $txtFirstName = $this->input->post('txtFirstName');
            if(!trim($txtFirstName) ){
                die("Please enter First name");
            }
            $txtEmail = $this->input->post('txtEmail');
            if(!trim($txtEmail) ){
                die("Please enter Email");
            }
            $txtRole = $this->input->post('txtRole');
            if(!trim($txtRole) ){
                die("Please enter Role");
            }
            $txtProfile = $this->input->post('txtProfile');
            if(!trim($txtProfile) ){
                die("Please enter Profile");
            }
            
            $data = array(
                'organization' => $this->input->post('txtCompany'),
                'first_name' => $this->input->post('txtFirstName'),
                'last_name' => $this->input->post('txtLastName'),
                'email' => $this->input->post('txtEmail'),
                'role' => $this->input->post('txtRole'),
                'profile' => $this->input->post('txtProfile')
            );
            
            $id = $this->user_model->insertUser($data);
            print_r($id);
            if($id){
                die(1);
            }
            else{
                die(0);
            }
            
        }
        $this->load->view('user/adduser');
    }

}

?>
