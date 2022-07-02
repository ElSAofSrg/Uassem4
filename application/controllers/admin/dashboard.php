<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Users_model');
    $this->load->database();
        //load model admin
        $this->load->model('admin');
        //cek session dan level user
        if($this->admin->is_role() != "admin"){
        redirect("login/"); 
  }
  }
  
    public function index()
  {
    $this->load->view('templates/header.php');
    $this->load->view('admin/dashboard.php'); 
    $this->load->view('templates/footer.php');
  }

  public function tambah()
  {
    $data['title']='Tambah Menu';

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('forminputsiswa');
    $this->load->view('templates/footer');
  }
   public function tambah_aksi()
   {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
      $this->tambah();
    } else {
      $data = array(
        'nis' =>  $this->input->post('nis'),
        'namasiswa' => $this->input->post('namasiswa'),
        'kelas' => $this->input->post('kelas'),
        'tahunajaran' => $this->input->post('tahunajaran'),
        'biaya' => $this->input->post('biaya'),
      );

      $this->siswa_model->insert_data($data, 'siswa');
      $this->session->set_flashdata('pesan',
        '<div class=alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil Ditambahkan!
                    <button type="button" class="close" data=dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
        </div');
      redirect('admin/datasiswa');
   }
 }


    public function logout()
    
  {
        $this->session->sess_destroy();
        redirect('login');
  }

     public function datasiswa()
  {
    $data['siswa'] = $this->Users_model->getAllSiswa();
    $this->load->view('datasiswa.php', $data);
  }
    
  public function dataguru()
    {
    $data['guru'] = $this->Users_model->getAllGuru();
    $this->load->view('dataguru.php', $data);
    }

  public function getguru()
    {
    $data['guru'] = $this->Users_model->getGuru($id);
    
    }
      public function datawalikelas()
    {
    $data['walikelas'] = $this->Users_model->getAllWalikelas();
    $this->load->view('datawalikelas.php', $data);
    }
    public function getkategori()
    {
    
    $this->data['cats'] = $this->Users_model->get_category();
    $this->load->view('forminputsiswa',$this->data);
   }
   public function getkategori1()
   {
   
   $this->data['cats'] = $this->Users_model->get_category();
   $this->load->view('formeditsiswa',$this->data);
  }
    public function inputsiswa(){
      
      $nis=$this->input->post('nis');
      $namasiswa=$this->input->post('namasiswa');
      $kelas=$this->input->post('kelas');
      $tahunajaran=$this->input->post('tahunajaran');
      $biaya=$this->input->post('biaya');
     
     
      $data = array(
       'nis' => $nis,
       'namasiswa' => $namasiswa,
       'kelas' => $kelas,
       'tahunajaran' => $tahunajaran,
       'biaya' => $biaya,
      );
      
      
     
     
      $query=$this->Users_model->insertsiswa($data);
      
     
      if ($query) {
       $data['siswa'] = $this->Users_model->getAllSiswa();
       $this->load->view('datasiswa.php', $data);
      }else{
        echo "error".mysqli_errno($query);
        echo "error".mysqli_error($query);
      }
  
     }
    
  
     public function updatesiswa(){
       $idsiswa = $this->input->post('idsiswa');
       $nis = $this->input->post('nis');
       $namasiswa = $this->input->post('namasiswa');
       $kelas = $this->input->post('kelas');
       $tahunajaran = $this->input->post('tahunajaran');
       $biaya = $this->input->post('biaya');
       
      
       $data = array(
        
         'nis' => $nis,
         'namasiswa' => $namasiswa,
         'kelas' => $kelas,
         'tahunajaran' => $tahunajaran,
         'biaya' => $biaya,
         
       );
      
       $where = array(
         'idsiswa' => $idsiswa
       );
      
       $this->Users_model->updatedataguru($where,$data,'siswa');
       $query = $this->db->last_query();
       echo $query;
       redirect('admin/Dashboard/datasiswa');
     }
 
   public function editsiswa($idsiswa){
     $where = array('idsiswa' => $idsiswa);
     $data['siswa'] = $this->Users_model->editdatasiswa($where,'siswa')->result();
     $this->load->view('formeditsiswa.php',$data);
   }
 
   public function hapussiswa($idsiswa){
     $where = array('idsiswa' => $idsiswa);
     $this->Users_model->deleteguru($where,'siswa');
     redirect('admin/Dashboard/datasiswa');
   }
 

    
  
  
  public function inputguru(){

     $nik=$this->input->post('nik');
     $namaguru=$this->input->post('namaguru');
     $alamat=$this->input->post('alamat');
     $telp=$this->input->post('telp');
    
     $data = array(
      'nik' => $nik,
      'namaguru' => $namaguru,
      'alamat' => $alamat,
      'telp' => $telp,
     );

     $query=$this->Users_model->insertguru($data);
     if ($query) {
      $data['guru'] = $this->Users_model->getAllGuru();
      $this->load->view('dataguru.php', $data);
     }else{
       echo "error".mysqli_errno($query);
       echo "error".mysqli_error($query);
     }
 
    }
  
    public function updateguru(){
      $idguru = $this->input->post('idguru');
      $nik = $this->input->post('nik');
      $namaguru = $this->input->post('namaguru');
      $alamat = $this->input->post('alamat');
      $telp = $this->input->post('telp');
      
     
      $data = array(
       
        'nik' => $nik,
        'namaguru' => $namaguru,
        'alamat' => $alamat,
        'telp' => $telp,
        
      );
     
      $where = array(
        'idguru' => $idguru
      );
     
      $this->Users_model->updatedataguru($where,$data,'guru');
      redirect('Dashboard/dataguru');
    }

  public function editguru($idguru){
    $where = array('idguru' => $idguru);
    $data['guru'] = $this->Users_model->editdataguru($where,'guru')->result();
    $this->load->view('formeditguru.php',$data);
  }

  public function hapusguru($idguru){
    $where = array('idguru' => $idguru);
    $this->Users_model->deleteguru($where,'guru');
    redirect('Dashboard/dataguru');
  }

  public function forminputsiswa(){
    $this->data['cats'] = $this->Users_model->get_category();
    $this->load->view('templates/header');
    $this->load->view('forminputsiswa',$this->data);
    $this->load->view('templates/footer');
     
     }

  public function forminputguru(){
     
    $this->load->view('forminputguru.php');
     
     }
  
  public function forminputwakel(){
     
      $this->load->view('forminputwakel.php');
       
       }
    

    public function get_autocomplete(){
          if (isset($_GET['term'])) {
            $result = $this->Users_model->get_nama($_GET['term']);
            
            if (count($result)> 0) {
              foreach ($result as $row)
              $arr_result[] = array(
                'label'     => $row->namaguru,
                
              );
                 echo json_encode($arr_result);
            }
           
          }
       }

       public function get_autocomplete1(){
        if (isset($_GET['term'])) {
          $result = $this->Users_model->get_kelas($_GET['term']);
          
          if (count($result)> 0) {
            foreach ($result as $row)
            $arr_result[] = array(
              'label'     => $row->kelas,
              
            );
               echo json_encode($arr_result);
          }
         
        }
     }
    
    
       public function inputwakel(){
  
       $kelas = $this->input->post('kelas');
       $namaguru = $this->input->post('namaguru');
      
      
       $data = array(
        'kelas' => $kelas,
        'namaguru' => $namaguru,
        
       );
 
       $query=$this->Users_model->insertwakel($data, 'walikelas');
       if ($query) {
        $data['walikelas'] = $this->Users_model->getAllWalikelas();
        $this->load->view('datawalikelas.php', $data);
       }else{
         echo "error".mysqli_errno($query);
         echo "error".mysqli_error($query);
       }
   
      }
     
    public function updatewakel(){
        
        $kelas = $this->input->post('kelas');
        $namaguru = $this->input->post('namaguru');
        $idwakel = $this->input->post('idwakel');
       
        $data = array(
         
          'kelas' => $kelas,
          'namaguru' => $namaguru,
        );
       
        $where = array(
          'idwakel' => $idwakel
        );
       
        $this->Users_model->updatedatawakel($where,$data,'walikelas');
        redirect('Dashboard/datawalikelas');
      }

    public function editwakel($idwakel){
      $where = array('idwakel' => $idwakel);
      $data['walikelas'] = $this->Users_model->editdatawakel($where,'walikelas')->result();
      $this->load->view('formeditwakel.php',$data);
    }

    public function hapuswakel($idwakel){
      $where = array('idwakel' => $idwakel);
      $this->Users_model->deletewakel($where,'walikelas');
      redirect('Dashboard/datawalikelas');
    }

     function cetak() {
       $data['datasiswa'] = $this->Users_model->getAllSiswa();
       $this->load->library('pdf');
       $this->pdf->setPaper('A4','potrait');
       $this->pdf->filename = "mahasiswa";
       $this->pdf->load_view('cetak/datasiswa',$data);
    }
}
?>