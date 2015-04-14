<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();

		//** menu bar *//
		$this -> load -> model('facebook_model');
	}

	public function check() {
		$fb_config = array(
            'appId'  => '1831342380425101',
            'secret' => '3b026c7678adc2707491bf1c170d2936',
            'redirect_url' => 'http://www.easytorecipe.com/login/check'
        );

        $this->load->library('facebook', $fb_config);

        $user = $this->facebook->getUser();

        if ($user) {
            try {
                $data['user_profile'] = $this->facebook
                    ->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }

        if ($user) {
            $data['logout_url'] = $this->facebook->getLogoutUrl();
        } else {
            $data['login_url'] = $this->facebook->getLoginUrl();
        }
		
		// $this -> facebook_model -> getSession();
		// $user_id = $this -> session -> userdata('id');
		// $user_name = $this -> session -> userdata('name');

		if (!$user_id) {
			echo "Something going wrong.";
		} else {
			redirect('category');
		}
		

// 
        $this->load->view('myview',$data);
	}

	public function clear() {
		$this -> session -> unset_userdata('id');
		$this -> session -> unset_userdata('name');
		redirect('category');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
