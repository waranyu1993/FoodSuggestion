<?php
class Facebook_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this -> load -> database();
	}

	public function setSession($data) {
		$this -> db -> from('user');
		$this -> db -> where('user.user_id', $data['user_id']);
		$query = $this -> db -> get();
		$isNew = array();
		foreach ($query->result_array() as $row) {
			$isNew[] = $row;
		}
		
		if ($isNew == null) {
			$data = array('user_id' => $data['user_id'], 
						  'user_name' => $data['user_name']);
			$this -> db -> insert('user', $data);
			
			$user_log = array('id' => $data['user_id'], 
						      'name' => $data['user_name']);
		} else {
			$user_log = array('id' => $isNew[0]['user_id'], 
						  	  'name' => $isNew[0]['user_name']);	
		}

		$this -> session -> set_userdata($user_log);
	}

}
?>