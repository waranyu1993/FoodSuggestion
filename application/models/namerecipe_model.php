<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Namerecipe_model extends CI_model {

	function __construct() {
		parent::__construct();
		$this -> load -> database();
	}

	function get_detail() {
		$this -> db -> from('menu');
		$this -> db -> join("type", "type.type_id = menu.type_id");
		$this -> db -> join("ingredient_list", "ingredient_list.menu_id = menu.menu_id");
		$this -> db -> join("menu_picture", "menu_picture.menupic_id = menu.menu_pic");
		$this -> db -> where("menu.menu_id", 1);
		$query = $this -> db -> get();
		$name = array();
		foreach ($query->result_array() as $row) {
			$name[] = $row;
		}
		
		// $this->view->p($name);
		return $name;
	}

}
