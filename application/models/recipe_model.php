<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recipe_model extends CI_model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }     
    
    function get_category() {
        $this->db->select('type.type_name');
        $this->db->from('type');
        $query = $this->db->get();
        $category = array();                       
        foreach ($query->result_array() as $row) {
            $category[] = $row;
        }
        return $category;
    }
}
