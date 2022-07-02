<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_model {

	private $table = 'siswa'; ///ini adalah nama tabelnya
	private $id = 'siswa.idsiswa';

	function __construct(){
		parent::__construct();
		$this->load->database();
		
	}

	public function insertsiswa($data){
		return $this->db->insert('siswa',$data);
	}

	public function getAllSiswa(){
		$this->db->select('*');
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_category(){
		$query = $this->db->get('walikelas')->result();
		return $query;
	   }

	function editdatasiswa($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function updatedatasiswa($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function deletesiswa($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}



	public function insertguru($data){
		return $this->db->insert('guru',$data);
	}


	public function getAllGuru(){
		$query = $this->db->get('guru');
		return $query->result();
	}


	public function getGuru($id){
		$query = $this->db->get_where('guru',array('id'=>$id));
		return $query->row_array();
	}

	function editdataguru($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function updatedataguru($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function deleteguru($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	   public function deletewakel($where,$table){
		   $this->db->where($where);
		   $this->db->delete($table);
	   }

	function editdatawakel($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function updatedatawakel($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	


	public function inserwakel($walikelas){
		return $this->db->insert('walikelas',$walikelas);
	}


	public function getAllWalikelas(){
		$this->db->select('*');
		$this->db->from('walikelas');
		     
		$query = $this->db->get();
		return $query->result();
	}


	public function get_nama($namaguru){
		$this->db->like('namaguru',$namaguru,'BOTH');
		$this->db->order_by('namaguru','asc');
		$this->db->limit(10);
		return $this->db->get('guru')->result();
	}

	
	
	
	
 }

?>