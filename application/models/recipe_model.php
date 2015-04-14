<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Recipe_model extends CI_model {

	function __construct() {
		parent::__construct();
		$this -> load -> database();
	}

	function get_category() {
		$this -> db -> from('menu');
		$this -> db -> join("type", "type.type_id = menu.type_id");
		$this -> db -> join("menu_picture", "menu_picture.menupic_id = menu.menu_pic");
		$query = $this -> db -> get();
		$category = array();
		foreach ($query->result_array() as $row) {
			$category[] = $row;
		}
		return $category;
	}

}
