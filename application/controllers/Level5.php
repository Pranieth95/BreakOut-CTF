<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Level5 extends MY_Controller {

    private $level = 5;

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('level_model');
    }

    public function index(){
        $data = array();
       // $levels = $this->get_levels($this->level);
        $data['home'] = "user";
        $data['ch_level'] = "level5/change_level";
        //$data['levels'] = $levels;
        $data['file'] = "level5/view_level5";
        $this->load->view('templates/template', $data);
    }

    
    public function view_level5()
    {
        $data = array();
        $data['level'] = $this->level;
        $data['submit_url'] = "level5/submit";
        $this->load->view('templates/header', $data);
        $this->load->view('levels/level5', $data);
        $this->load->view('templates/footer');
    }



    public function submit()
    {
        $data = array(
            'passph' => $this->input->post('passph')
        );
        $result = array();
       
        if($data['passph'] == "kbZYMhknS2UiipHiwQ5Ah3MP7f5UTQX1PMPsRXDz")
        {
            
            $result['status'] = true;
            $result['path'] = site_url('level6');
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
            $result['path'] = site_url('level5');
        }
        echo json_encode($result);
        
    }

    public function flag()
    {
        $data = array(
            'name' => $this->input->post('name')
        );
        $result = array();
       
        if(isset($data['name']))
        {
            
            $result['status'] = true;
            $result['path'] = "kbZYMhknS2UiipHiwQ5Ah3MP7f5UTQX1PMPsRXDz";
            
        }
        else
        {
            $result['status'] = false;
        }
        echo json_encode($result);
        
    }
}


	

	

	