<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainpage extends CI_Controller {
	public function __construct() {
        parent::__construct();    
        $this->lang->load('message','english');
    }

	public function index(){
		$this->load->view('main-page');
	}
	
	public function test(){
		echo "test";
	}
}
