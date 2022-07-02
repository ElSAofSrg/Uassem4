<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('admin/_partials/head.php'); ?>
</head>
<body class="sb-nav-fixed">
<?php $this->load->view('admin/_partials/navbar.php'); ?>
<?php $this->load->view('admin/_partials/sidebar.php'); ?>
<div id="layoutSidenav_content">
<main>
  <div class="container">
    <div class="row">
    <div class="main col-md-6 offset-3">
        <h2 class="text-center mt-5">Tambah Data Guru</h2>
        <form method="POST" action="<?php echo base_url() ; ?>index.php/Dashboard/inputguru" method="post">
        
      
        <div class="form-group ">
              <label>NIK</label>
            
           
              <input type="text" name="nik" class="form-control rounded-pill">
              </div>
          
          
              <div class="form-group ">
              <label>Nama Guru</label>
            
            
              <input type="text" name="namaguru" class="form-control rounded-pill">
              </div>
          
          
              <div class="form-group ">
              <label>Alamat</label>
          
              <input type="text" name="alamat" class="form-control rounded-pill">
              </div>
          
         
              <div class="form-group ">
              <label>Telepon</label>
            
           
              <input type="telepon" name="telp" class="form-control rounded-pill">
              </div>
         
          <div class="clearfixs">
            <div class="float-right">
              <button class="submit" type="submit" name="simpan">Simpan</button>
            </div>
             <div class="float-left" >
                  <a href="<?php echo base_url(); ?>index.php" class="btn btn-primary shadow">Kembali</a>
                  </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </main>
            
            <?php $this->load->view('admin/_partials/footer.php'); ?>
                     
                        <?php $this->load->view('admin/_partials/js.php'); ?>
  <div>
    <p class="text-center mt-1">By Elsa Olivya</p>
  </div>
</body>
</html>

