<?php

defined('BASEPATH') or exit('No direct script access allowed !');

class Data_kampus extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function lecturer()
  {
    $query = $this->db->query("SELECT * FROM detail");
    return $query->result_array();
  }

  public function student()
  {
    $query = $this->db->query("SELECT * FROM ruangan");
    return $query->result_array();
  }

  public function user()
  {
    $query = $this->db->query("SELECT * FROM admin");
    return $query->result_array();
  }

  public function dellec($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function delstu($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function dellus($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
}
