<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Level7 extends MY_Controller {

    private $level = 7;

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('level_model');
    }

    public function index(){
        $data = array();
       // $levels = $this->get_levels($this->level);
        $data['home'] = "user";
        $data['ch_level'] = "level7/change_level";
        //$data['levels'] = $levels;
        $data['file'] = "level7/view_level7";
        $this->load->view('templates/template', $data);
    }

    
    public function view_level7()
    {
        $data = array();
        $data['level'] = $this->level;
        $data['submit_url'] = "level7/submit";
        $this->load->view('templates/header', $data);
        $this->load->view('levels/level7', $data);
        $this->load->view('templates/footer');
    }

    public function submit()
    {
        $data = array(
            'passph' => $this->input->post('passph')
        );
        $result = array();
       
        if($data['passph'] == "dwuGNRD3BXIQmfinoNSVkwZPPh49KtVNOdkpUNgj")
        {
            $result['status'] = true;
            $result['path'] = site_url('level8');
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
            $result['path'] = site_url('level7');
        }
        echo json_encode($result);
    }
}