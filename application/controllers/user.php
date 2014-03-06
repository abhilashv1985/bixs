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
        $this->load->helper('form');
        $this->load->library('form_validation');
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
            $this->form_validation->set_rules('txtCompany', 'Company name', 'trim|required');
            $this->form_validation->set_rules('txtFirstName', 'Name', 'trim|required');
            $this->form_validation->set_rules('txtEmail', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('txtPassword', 'Password', 'trim|required');
            if ($this->form_validation->run() === FALSE) {
                $this->session->set_flashdata('message', validation_errors());
                $this->session->set_flashdata('msg_class', 'error_message');
                redirect('user/adduser');
            }
            
            $txtCompany = $this->input->post('txtCompany');
            $txtFirstName = $this->input->post('txtFirstName');
            $txtEmail = $this->input->post('txtEmail');
            $txtPassword = $this->input->post('txtPassword');
            $txtRole = $this->input->post('txtRole');
            $txtProfile = $this->input->post('txtProfile');
 
            $data = array(
                'organization' => $txtCompany,
                'first_name' => $txtFirstName,
                'last_name' => $this->input->post('txtLastName'),
                'email' => $txtEmail,
                'password' => md5($txtPassword),
                'role' => $txtRole,
                'profile' => $txtProfile,
                'status' => 1
            );
            $id = $this->user_model->insertUser($data);
            //print_r($id);
            redirect('user/adduser');
        }
        $this->load->view('user/adduser');
    }

    public function disableUser() {
        $userid = $this->input->post('userid');
        $success = $this->user_model->disableUser($userid);
        die($success);
    }

    public function showEditUserPage() {
        $formsubmit = $this->input->post('formsubmit');
        $userid = $this->input->post('userid');
        if ($_POST && $formsubmit == 1) {
            // validation
            $txtCompany = $this->input->post('txtCompany');
            if (!trim($txtCompany)) {
                die("Please enter company");
            }
            $txtFirstName = $this->input->post('txtFirstName');
            if (!trim($txtFirstName)) {
                die("Please enter First name");
            }
            $txtEmail = $this->input->post('txtEmail');
            if (!trim($txtEmail)) {
                die("Please enter Email");
            }
            $txtRole = $this->input->post('txtRole');
            if (!trim($txtRole)) {
                die("Please enter Role");
            }
            $txtProfile = $this->input->post('txtProfile');
            if (!trim($txtProfile)) {
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

            $id = $this->user_model->updateUser($data, $userid);
            //print_r($id);
            if ($id) {
                die("1");
            } else {
                die("0");
            }
        }
        $data['user'] = $this->user_model->getUserDetail($userid);
        $this->load->view('user/edituser', $data);
    }

}

?>
