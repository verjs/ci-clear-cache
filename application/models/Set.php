<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Set extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    /*
    * Name: Include JS file
    * Usage: 
    * @return: JS Script
    */

    public function successMsg($msg) {
        return  '<div class="alert alert-success" role="alert">
                 '.$msg.'
                </div>';
    }

    public function errorMsg($msg) {
        return  '<div class="alert alert-danger" role="alert">
                  '.$msg.'
                </div>';   
    }



}

?>