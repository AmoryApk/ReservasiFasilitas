<?php
class Register_model extends CI_Model
{
	function insert_data($nama_admin,$username,$password)
	{
	$query=$this->db->query("select * from admin where (username='".$username."')");
		$row = $query->num_rows();
		if($row)
		{
		$data['message']="<h3 style='color:red'>This user already registered</h3>";
		}
		else
		{
		$query=$this->db->query("insert into admin set nama_admin='$nama_admin', username='$username',password='$password'");

		$data['message']="<h3 style='color:blue'>You are registered successfully</h3>";
		}

		$this->load->view('registration_view',@$data);
		}

	}