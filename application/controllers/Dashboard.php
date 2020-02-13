<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
	{
		parent::admin();
	}

	
	public function index()
	{

		$params = array('layout' 			=> 'dashboard',
					   );

		$this->load->view('template-dashboard', $params);

	}


}