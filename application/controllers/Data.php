<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('data_kampus');
    if (!$this->session->userdata('email_admin')) {
      redirect('index.php/Admin');
    }
  }

  public function index()
  {
    $data['judul'] = 'Halaman Reservasi';
    $data['Admin'] = $this->db->get_where(
      'adminlog',
      ['email_admin' => $this->session->userdata('email_admin')]
    )->row_array();
    $data['dosen'] = $this->data_kampus->lecturer();
    $data['style'] = $this->load->view('include/style', NULL, TRUE);
    $data['script'] = $this->load->view('include/script', NULL, TRUE);
    $data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
    $this->load->view('template/header', $data);
    $this->load->view('template/navbar');
    $this->load->view('page/dosen', $data);
  }

  public function student()
  {
    $data['judul'] = 'Halaman Fasilitas';
    $data['admin'] = $this->db->get_where(
      'adminlog',
      ['email_admin' => $this->session->userdata('email_admin')]
    )->row_array();
    $data['mahasiswa'] = $this->data_kampus->student();
    $data['style'] = $this->load->view('include/style', NULL, TRUE);
    $data['script'] = $this->load->view('include/script', NULL, TRUE);
    $data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
    $this->load->view('template/header', $data);
    $this->load->view('template/navbar');
    $this->load->view('page/mahasiswa', $data);
  }

  public function user()
  {
    $data['judul'] = 'Halaman User';
    $data['admin'] = $this->db->get_where(
      'adminlog',
      ['email_admin' => $this->session->userdata('email_admin')]
    )->row_array();
    $data['user'] = $this->data_kampus->user();
    $data['style'] = $this->load->view('include/style', NULL, TRUE);
    $data['script'] = $this->load->view('include/script', NULL, TRUE);
    $data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
    $this->load->view('template/header', $data);
    $this->load->view('template/navbar');
    $this->load->view('page/user', $data);
  }

  public function hapuslecture($id)
  {
    $where = array('id_reservasi' => $id);
    $this->data_kampus->dellec($where, 'detail');
    redirect('Data/index');
  }

  public function hapusstudent($id)
  {
    $where = array('no_ruangan' => $id);
    $this->data_kampus->delstu($where, 'ruangan');
    redirect('Data/Student');
  }

  public function hapususer($id)
  {
    $where = array('id_admin' => $id);
    $this->data_kampus->dellec($where, 'admin');
    redirect('Data/user');
  }
}
