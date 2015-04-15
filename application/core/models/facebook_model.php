<?php
class Facebook_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this -> load -> database();
	}

	public function getSession() {
		$config = array('appId' => '1831342380425101', 
						'secret' => '3b026c7678adc2707491bf1c170d2936'
		// Indicates if the CURL based @ syntax for file uploads is enabled.
		);
        
		$this -> load -> library('facebook', $config);
		
		$user = $this -> facebook -> getUser();
		$profile = null;
		if ($user) {
			try {
				// Proceed knowing you have a logged in user who's authenticated.
				$profile = $this -> facebook -> api('/me?fields=id,name,link,email');

			} catch (FacebookApiException $e) {
				error_log($e);
				$user = null;
			}
		}

		$this -> db -> from('user');
		$this -> db -> where('user.user_id', $profile['id']);
		$query = $this -> db -> get();
		$isNew = array();
		foreach ($query->result_array() as $row) {
			$isNew[] = $row;
		}
		

		if ($isNew == null) {
			$data = array('user_id' => $profile['id'], 
						  'user_name' => $profile['name']);
			$this -> db -> insert('user', $data);
			
			$user_log = array('id' => $profile['id'], 
						      'name' => $profile['name']);
		} else {
			$user_log = array('id' => $isNew[0]['user_id'], 
						  	  'name' => $isNew[0]['user_name']);	
		}

		$this -> session -> set_userdata($user_log);
	}

}
?>