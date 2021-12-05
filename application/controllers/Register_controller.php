<?php
class Register_controller extends CI_Controller
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('Register_model'); ///load model
	}

	public function index()
	{

		if($this->input->post('register'))
		{
		$nama_admin=$this->input->post('name');
		$username=$this->input->post('uname');
		$password=md5($this->input->post('password'));

		$this->Register_model->insert_data($nama_admin,$username,$password);

	}else{
	$this->load->view('registration_view');
	}
	}
}
?>