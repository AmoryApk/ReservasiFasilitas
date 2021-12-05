<?php 

class Auth extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Auth_model');
	}
	function index(){
		if($this->session->has_userdata('status')){
			redirect('Data/index');
		}
		else {
			$data['error']='';
			$data['kelas']='';
			$this->load->view('login_form',$data);
		}
	}
	function aksilogin(){
		$username = $this->input->post('username');
		$pwd = $this->input->post('pwd');
		$hash = md5($pwd);
		$pass_db = $this->M_login->cek_login($username);
		if ($pass_db->password == $hash) {

			$id_admin = $this->M_login->ambil_idadmin($username);
			$data_session = array(
				'id_admin' => $id_admin,
				'status' => 'login'
				);

			$this->session->set_userdata($data_session);
			/*echo '<pre>'; print_r($this->session->all_userdata());exit;*/
			redirect('Data/index');
		}
		else{
			$data['error'] = "Username/Password Salah";
			$data['kelas'] = "alert alert-warning";
			$this->load->view('index', $data);
			/*echo "<script>alert('Username/Password Salah');
			window.location='index'</script>";*/
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}

}