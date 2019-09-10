<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('level_model');
        ini_set('display_errors', 1);
        // Check that the user is logged in
        if(!$this->session->userdata('isUserLoggedIn')){
            if ($this->router->class != 'Users') 
            {                        
                //redirect(base_url());
                redirect('user/login');
            }
        } 
    }

    public function get_levels($level)
    {

       // $levels = $this->level_model->getCompLevels($levelData);
        
        if(count($levels)>0)
            $max_level = $levels[count($levels)-1]['level_id'];
        else
            $max_level = 0;
        if($max_level < $level)
            if($level != 1 && !in_array($level-1, array_column($levels, 'level_id')))
                redirect('level'.++$max_level);

        return $levels;
    }

    public function change_level()
    {
        $data = array(
            'level' => $this->input->post('level')
        );
        $result['path'] = site_url('level'.$data['level']);
        echo json_encode($result);
    }
}