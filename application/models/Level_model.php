<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Level_model extends CI_Model{
    function __construct() {
    }

    public function completeLevel($data = array()) {

        $this->session->set_userdata('completedLevels',TRUE);
        $data['status'] = '1';
        $levelid = $data['level_id'];
        return true;
    }

    public function getCompLevels($data = array()) {
        $sql = "select level_id from $this->userLevelTbl where user_id = ? and status = '1' order by level_id";
        $query = $this->db->query($sql, array($data['user_id']));
        $result = ($query->num_rows() > 0)?$query->result_array():array();
        return $result;
    }
}