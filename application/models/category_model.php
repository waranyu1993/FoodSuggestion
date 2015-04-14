<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Category_model extends CI_model {

	function __construct() {
		parent::__construct();
		$this -> load -> database();
	}

	function get_category($type_id) {
		$this -> db -> from('menu');
		$this -> db -> join("type", "type.type_id = menu.type_id");
		$this -> db -> join("menu_picture", "menu_picture.menupic_id = menu.menu_pic");
		$this -> db -> where("type.type_id", $type_id);
		$query = $this -> db -> get();
		$category = array();
		foreach ($query->result_array() as $row) {
			$category[] = $row;
		}

		// $this->view->p($category);
		return $category;
	}

	function get_detail($id_recipe) {
		$this -> db -> from('menu');
		$this -> db -> join("type", "type.type_id = menu.type_id");
		$this -> db -> join("ingredient_list", "ingredient_list.menu_id = menu.menu_id");
		$this -> db -> join("menu_picture", "menu_picture.menupic_id = menu.menu_pic");
		$this -> db -> where("menu.menu_id", $id_recipe);
		$query = $this -> db -> get();
		$name = array();
		foreach ($query->result_array() as $row) {
			$name[] = $row;
		}

		//$this->view->p($name);
		return $name;
	}

	function get_ingredient($ing_list) {
		$x = explode(",", $ing_list);
		$this -> db -> from('ingredient');
		$this -> db -> where("ing_id", $x[0]);
		for ($i = 1; $i < sizeof($x); $i++) {
			$this -> db -> or_where('ing_id', $x[$i]);
		}
		$query = $this -> db -> get();
		$name = array();
		foreach ($query->result_array() as $row) {
			$name[] = $row;
		}
		return $name;
	}

}
