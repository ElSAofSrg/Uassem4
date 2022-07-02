<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body class="sb-nav-fixed">
<div id="layoutSidenav_content">
<main>
  <div class="container">
    <div class="row">
    <div class="main col-md-6 offset-3">
        <h2 class="text-center mt-5">Tambah Data Siswa</h2>
        <form method="POST" action="<?php echo base_url(
        ); ?>index.php/admin/dashboard/inputsiswa" method="post">
        
      
        <div class="form-group ">
              <label>Nis</label>
            
           
              <input type="text" name="nis" class="form-control rounded-pill" placeholder="Isikan Nis">
              </div>
          
          
              <div class="form-group ">
              <label>Nama Siswa</label>
            
            
              <input type="text" name="namasiswa" class="form-control rounded-pill" placeholder="Isikan Nama Siswa">
              </div>
          
          
              <div class="form-group ">
               <label>Kelas</label>
            
            
             <select class="form-control" id="kelas" name="kelas">
                <option selected="0">select..</option>
                 <?php 
   
                    foreach($cats as $cat) { ?>
                    <option value="<?php echo $cat->kelas;?>"> <?php echo $cat->kelas; ?></option>
               <?php } ?>
            </select>
            
             </div>
          
         
              <div class="form-group ">
              <label>Tahun Ajaran</label>
            
           
              <input type="text" name="tahunajaran" class="form-control rounded-pill" placeholder="Isikan Tahun">
              </div>
         
              <div class="form-group ">
              <label>Biaya Spp</label>
            
           
              <input type="text" name="biaya" class="form-control rounded-pill" placeholder="Isikan Biaya">
              </div>

                       
          

          <div class="clearfixs">
            <div class="float-right">
              <button class="submit" type="submit" name="simpan">Simpan</button>
            </div>
             <div class="float-left" >
                  <a href="<?php echo base_url(); ?>index.php/admin/dashboard/datasiswa" class="btn btn-primary shadow">Kembali</a>
                  </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </main>
            
          
  <div>
  <?php $this->load->view('admin/_partials/footer.php'); ?>
                     
                     <?php $this->load->view('admin/_partials/js.php'); ?>
    <p class="text-center mt-1">By Elsa Olyvia/p>
  </div>
</body>
</html>

