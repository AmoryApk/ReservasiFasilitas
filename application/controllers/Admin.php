<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function coba()
  {
    var_dump('masuk');
    die;
  }

  public function index()
  {
    $this->form_validation->set_rules('email_admin', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'password', 'trim|required');

    if ($this->form_validation->run() == false) {
      $data['judul'] = 'Halaman Login';
      $data['style'] = $this->load->view('include/style', NULL, TRUE);
      $data['script'] = $this->load->view('include/script', NULL, TRUE);
      $this->load->view('auth/login');
    } else {
      $this->login();
    }
  }
  private function login()
  {
    $Email = $this->input->post('email_admin');
    $password = $this->input->post('password');
    $user = $this->db->get_where('adminlog', ['email_admin' => $Email])->row_array();

    $password = md5($password);

    if ($password == $user['password']) {
      $data = [
        'email_admin' => $user['email_admin']
      ];
      $this->session->set_userdata($data);
      redirect('Data/index');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email atau Password Salah!</div>');
      redirect('Admin');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('email_admin');
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Berhasil logout!</div>');
    redirect('index.php/Admin/index');
  }
}
