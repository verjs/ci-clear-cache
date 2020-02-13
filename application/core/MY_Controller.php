<?php

defined('BASEPATH') || exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

   public function __construct() {
   		parent::__construct();
   }
  

   public function admin() {

   		parent::__construct();

	    /*
	    * Name: Admin secured controller
	    * Usage: Securing admin pages by authenticating it
	    * @return: bolean
	    */
   		
   		/* Check if admin is authenticated, redirect if false */
   		
   		if(!$this->session->userdata('adminLogged')) {
   			redirect(base_url(), 'refresh');
   		}

   } 

}

?>