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

    public function authenticateLogin() {
        $txtlogin = $this->input->post('txtlogin');
        $txtPass = md5($this->input->post('txtPass'));
        $user = $this->user_model->authenticateLogin($txtlogin, $txtPass);
        if ($user) {
            //print_r("------------------------------------------");
           // print_r($user->id);
            //print_r($user->email);
            //print_r($user->role);
            //create session
            $sessionArray = array('name' => @$user->first_name, 'email' => @$user->email, 'userId' => @$user->id, 'userrole' => @$user->role);
            $this->session->set_userdata($sessionArray);
            die("1");
        } else {
            die("0");
        }
    }

    public function showUsers() {
        //$userid = $this->session->userdata('userId');

        // get user details to list.
        $data["user_details"] = $this->user_model->getAllUser();
        $this->load->view('user/user', $data);
    }

    public function showAddUserPage() {
        $userid = $this->session->userdata('userId');
        $formSubmit = $this->input->post('formSubmit');
        if ($_POST && $formSubmit == 1) {
            // validation
            $txtCompany = $this->input->post('txtCompany');
            $txtFirstName = $this->input->post('txtFirstName');
            $txtEmail = $this->input->post('txtEmail');
            $txtPassword = $this->input->post('txtPassword');
            $txtRole = $this->input->post('txtRole');
            $ddwnProfile = $this->input->post('ddwnProfile');
            if (!trim($txtCompany)) {
                die("Please enter company");
            }
            if (!trim($txtFirstName)) {
                die("Please enter First name");
            }
            if (!trim($txtEmail)) {
                die("Please enter Email");
            }
            if (!filter_var($txtEmail, FILTER_VALIDATE_EMAIL))
                die("INVALID EMAIL");

            if (!trim($txtRole)) {
                die("Please enter Role");
            }
            if (!trim($ddwnProfile)) {
                die("Please enter Profile");
            }
            $data = array(
                'organization' => $txtCompany,
                'first_name' => $txtFirstName,
                'last_name' => $this->input->post('txtLastName'),
                'email' => $txtEmail,
                'password' => md5($txtPassword),
                'role' => $txtRole,
                'profile' => $ddwnProfile,
                'status' => 1
            );
            //print_r($userid); die;
            $id = $this->user_model->insertUser($data);
            if ($id) {
                $this->load->library('history');
                $tablename = "user";
                $operation = "Insertion of new User";
                //$perform_by = $userid;
                $this->history->logActivity($id, $tablename, $operation);
                die("1");
            } else {
                die("0");
            }
        }
        $this->load->view('user/adduser');
    }

    public function disableUser() {
        //$userid = $this->session->userdata('userId');
        $useracc = $this->input->post('userid');
        $success = $this->user_model->disableUser($useracc);
        $this->load->library('history');
        $id = $useracc;
        $tablename = "user";
        $operation = "Disable User";
        //$perform_by = $userid;
        $this->history->logActivity($id, $tablename, $operation);
        die($success);
    }

    public function showEditUserPage() {
        //$userid = $this->session->userdata('userId');
        $formsubmit = $this->input->post('formsubmit');
        $useracc = $this->input->post('userid');
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
            $ddwnProfile = $this->input->post('ddwnProfile');
            if (!trim($ddwnProfile)) {
                die("Please enter Profile");
            }

            $data = array(
                'organization' => $this->input->post('txtCompany'),
                'first_name' => $this->input->post('txtFirstName'),
                'last_name' => $this->input->post('txtLastName'),
                'email' => $this->input->post('txtEmail'),
                'role' => $this->input->post('txtRole'),
                'profile' => $this->input->post('ddwnProfile')
            );

            $success = $this->user_model->updateUser($data, $useracc);
            //print_r($id);
            if ($success) {
                $id = $useracc;
                $this->load->library('history');
                $tablename = "user";
                $operation = "Insertion of new User";
                //$perform_by = $userid;
                $this->history->logActivity($id, $tablename, $operation);
                die("1");
            } else {
                die("0");
            }
        }
        $data['user'] = $this->user_model->getUserDetail($useracc);
        $this->load->view('user/edituser', $data);
    }

}

?>
