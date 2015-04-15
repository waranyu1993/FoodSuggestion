<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Category extends CI_Controller {
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
		$this -> load -> model("category_model");
		$this -> load -> model("recipe_model");
		//** menu bar *//
		$this -> load -> model('facebook_model');
		$this -> load -> model("header_model");
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
		$data['menu'] = $this -> header_model -> get_type();
		$this -> view -> page_view('menu', $data);
	}

	public function index() {
		$data['menu'] = $this -> header_model -> get_type();
		$data['type_cate'] = $this -> recipe_model -> get_category();
		$this -> view -> page_view('recipe_view', $data);
	}

	public function type($var) {
		$data['menu'] = $this -> header_model -> get_type();
		$data['type_cate'] = $this -> category_model -> get_category($var);
		$this -> view -> page_view('category_view', $data);
	}

	public function name($id_recipe) {
		$data['menu'] = $this -> header_model -> get_type();
		$data['detail'] = $this -> category_model -> get_detail($id_recipe);
		$data['ingredient'] = $this -> category_model -> get_ingredient($data['detail'][0]["ing_id"]);
		$this -> view -> page_view('namerecipe_view', $data);
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
