<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_controllers extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('users_models');
	}

	public function welcome(){
		$this->load->view('welcome_message');
	}
	public function index()
	{
		$this->load->view('users/layout/header');
        $this->load->view('users/pages/index');
        $this->load->view('users/layout/footer');
	}
	
}
