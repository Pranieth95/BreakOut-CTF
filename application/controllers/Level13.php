<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Level13 extends MY_Controller {

    private $level = 13;

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('level_model');
    }

    public function index(){
        $data = array();
       // $levels = $this->get_levels($this->level);
        $data['home'] = "user";
        $data['ch_level'] = "level13/change_level";
        //$data['levels'] = $levels;
        $data['file'] = "level13/view_level13";
        $this->load->view('templates/template', $data);
    }

    
    public function view_level13()
    {
        $data = array();
        $data['level'] = $this->level;
        $data['submit_url'] = "level13/submit";
        $this->load->view('templates/header', $data);
        $this->load->view('levels/level13', $data);
        $this->load->view('templates/footer');
    }

    public function submit()
    {
        $data = array(
            'passph' => $this->input->post('passph')
        );
        $result = array();
       
        if($data['passph'] == "f3bJKChZdKphVjfbvnvPTrfSDu8R3TjbeXb2CVMq")
        {
            $result['status'] = true;
            $result['path'] = site_url('level14');
            $levelData = array(
                'user_id' => $this->session->userdata('userId'),
                'level_id' => $this->level
            );

            $insert = $this->level_model->completeLevel($levelData);
            if(!$insert)
                $result['status'] = false;
        }
        else
        {
            $result['status'] = false;
            $result['path'] = site_url('level13');
        }
        echo json_encode($result);
    }
}