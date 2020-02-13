<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/admin
	 *	- or -
	 * 		http://example.com/index.php/admin/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/admin/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__Construct();

		$this->load->helper('directory');
		$this->folder = './system/cache/';
		$this->cache_folder = directory_map($this->folder);
	}
	
	public function index(){
		

		$folder = $this->folder;
		$cache_folder = $this->cache_folder;
	
		$params = array('cache_folder' => $cache_folder,
						'folder'	   => $folder);

		$this->load->view('template-admin', $params);
	}

	public function clear_cache() {
		
		$folder = $this->folder;
		$cache_folder = $this->cache_folder;

		foreach($cache_folder as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'rec') {
            	unlink($folder.$file);
            	$msg = 'Cache has been cleared';
            } else {
            	$msg = 'Cache already been cleared';
            }
        }

		$this->session->set_flashdata('flashMsg', $this->set->successMsg($msg));
		redirect(site_url().'/admin', 'location', 301);	
	}
	
}