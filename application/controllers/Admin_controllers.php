<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controllers extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin_models');
	}
	public function dashboard()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('admin/layout/header', $data);
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/pages/dashboard', $data);
		$this->load->view('admin/layout/footer');
	}

}
