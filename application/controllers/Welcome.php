<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Welcome_user','User');
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function checkLogin(){
		$data['firstname'] = $this->input->post('firstname');
		$data['lastname'] = $this->input->post('lastname');
		$status = $this->User->checkLogin($data);
		$data['status'] = $status;
		echo json_encode($data);
	}
	public function details(){
		$this->load->view('details');
	}
	public function button(){
		$data['table_status'] = rand(1,3);
		$this->load->view('buttontest',$data);
	}
}
?>