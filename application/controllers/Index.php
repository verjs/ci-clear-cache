<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__Construct();
	}

	public function index() {
		
		// check if already logged in then redirect to dashboard
		if($this->session->userdata('adminLogged')) {
			redirect(base_url().'dashboard', 'location', 301);
		}
		

		$params = array('layout' 		=> 'login'
					   );

		$this->load->view('login', $params);
	}		

	public function authenticate() {

		// Process user login
		$username  = $this->input->post('username');
		$password  = $this->input->post('password');

		$config_username = $this->config->item('app_username');
		$config_password = $this->config->item('app_password');

		if($config_username == $username && $config_password == $password) {

			$this->session->set_userdata('adminLogged', 1);

			// redirect to dashboard
			redirect(site_url().'/admin', 'location', 301);

		} else {

			$this->session->set_flashdata('flashMsg',$this->set->errorMsg('Invalid username or password'));
			redirect(site_url(), 'location', 301);

		}

	}

	public function out() {

		// Process user logout

		$this->session->set_userdata('adminLogged', 0);
		$this->session->unset_userdata('userId');
		$this->session->unset_userdata('groupId');
		$this->session->sess_destroy();

		redirect(site_url(), 'location', 301);

	}	



}