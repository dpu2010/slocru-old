<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model', '', true);
    }

    public function index() {
        
        //Load header
        $this->load->view('header/header');
        
        //If user is logged in as an admin, bring up the admin page
        if ($this->session->userdata('admin')) {
            $this->load->view('adminpage');
            
        //If there is login information
        } elseif ($this->input->post('username') && $this->input->post('password')) {
            
            //Get username and password from form
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            //Get user info from database
            $result = $this->user_model->getUsers($username);
            $result = $result[0];
            
            //Compare password
            if ($result->password == crypt($password, $result->password)) {
                $this->session->set_userdata('admin', true);
                $this->load->view('adminpage');
                
            //If incorrect, bring up login page again
            } else {
                $this->load->view('adminlogin');
                
            }
        //Bring up login page
        } else {
            $this->load->view('adminlogin');
            
        }

        //Load footer
        $this->load->view('footer/footer');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
