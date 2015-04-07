<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header_model extends CI_model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }     
    
    function get_type() {
        $this->db->from('type');
        $query = $this->db->get();
        $type = array();                       
        foreach ($query->result_array() as $row) {
            $type[] = $row;
        }
        return $type;
    }
}
