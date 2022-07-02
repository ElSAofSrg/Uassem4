<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa_model extends CI_Model {
	public function insert_data($data, $table)
        {
            this->db->insert($table, $data);

}