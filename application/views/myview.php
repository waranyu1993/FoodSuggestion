<?php if ($user_profile != null || $user_id != null) {
	$this -> session -> set_userdata($user_profile);
	redirect('login/setdb', 'refresh');
} else { 
    redirect( $login_url );
} ?>
