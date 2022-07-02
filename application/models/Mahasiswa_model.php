<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

	private $table = 'Mahasiswa'; ///ini adalah nama tabelnya
	private $id = 'Mahasiswa.id';

	function get_all()
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result();
	}

}