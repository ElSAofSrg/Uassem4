<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mahasiswa extends CI_Controller {

	public function_construct()
	{
		 parent::__construct();
         $this->load->model('Mahasiswa_model');
    }

    function index()
    {
    $data['dataMahasiswa'] = $this->Mahasiswa_model->get_all();
    $this->load->view('Mahasiswa/Mahasiswa_list', $data);
    }

    function cetak_mahasiswa()
    {
    	$data['dataMahasiswa'] = $this->Mahasiswa_model->get_all();
    	 $this->load->library('pdf');
    	 $this->pdf->setPaper('A4','potrait');
    	 $this->pdf->filename = "mahasiswa";
    	 $this->pdf->load_view('cetak/mahasiswa',$data);
    }

 }