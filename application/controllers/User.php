<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class User extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
    }
    
    public function index(){
        $data = array();
        $data['logout_url'] = "user/logout";
        $data['level1'] = "level1";
        if($this->session->userdata('isUserLoggedIn')){
            $this->load->view('user/home', $data);
        }else{
            redirect('user/login');
        }
    }
        
    /*
     * User login
     */
    public function login(){
        $data = array();
        $data['submit_url'] = "user/auth_login";
        $this->load->view('user/logins', $data);
    }


    public function auth_login(){
        $result = array();

        $email = $this->input->post('email');
        $password = $this->input->post('pass');

        if($email == "abc@gmail.com" && $password = "123"){
            $this->session->set_userdata('isUserLoggedIn',TRUE);
            $result['status'] = true;
            $result['path'] = site_url('user');
        }else{
            $result['status'] = false;
            $result['path'] = site_url('user/logins');
        }
        echo json_encode($result);
    }
    
    /*
     * User registration
     */
    
    /*
     * User logout
     */
    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->sess_destroy();
        redirect('user/login/');
        
    }
}