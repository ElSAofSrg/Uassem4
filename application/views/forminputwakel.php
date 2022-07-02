<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="<?php echo base_url(); ?>dbadmin/css/styles.css" rel="stylesheet" />
        
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" />
 

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
 <!-- Memanggil file .js untuk proses autocomplete -->
<script type='text/javascript' src='<?= base_url()?>assets/js/jquery-1.8.2.min.js'></script>
<script type='text/javascript' src='<?= base_url()?>assets/js/jquery.autocomplete.js'></script>

<!-- Memanggil file .css untuk style saat data dicari dalam filed -->
<link href='<?php echo base_url();?>assets/js/jquery.autocomplete.css' rel='stylesheet' />

<!-- Memanggil file .css autocomplete_ci/assets/css/default.css -->
<!-- <link href="<?= base_url()?>assets/css/default.css" rel="stylesheet" /> -->

</head>


<body class="sb-nav-fixed">
<?php $this->load->view('admin/_partials/navbar.php'); ?>
<?php $this->load->view('admin/_partials/sidebar.php'); ?>
<div id="layoutSidenav_content">
<main>
<div class="container">
    <div class="row">
      <div class="main col-md-6 offset-3">
        <h2 class="text-center mt-5">Tambah Data Walikelas</h2>
        <form method="POST"  action="<?php echo base_url() ; ?>index.php/Dashboard/inputwakel">
            <div class="form-group">
				    <label>Kelas</label>
				    <input type="text" name="kelas" class="form-control" id="kelas" placeholder="kelas" style="width:500px;">
				 </div>

          <div class="form-group ">
          <label>Nama Guru</label>
          <input type="text" name="namaguru" class="form-control" id="namaguru" placeholder="Nama Guru" style="width:500px;">
        </div>
        <div class="form-group">
				    <label>Id guru</label>
				    <input type="text" name="idguru" class="form-control" placeholder="Id Guru" style="width:500px;">
				 </div>
          				 </div>
                    <div class="clearfixs">
            
            <div class="form-group">
            <div class="float-right">
              <button class="submit" type="submit" name="simpan">Simpan</button>
            </div>
             <div class="float-left" >
                  <a href="<?php echo base_url(); ?>index.php" class="btn btn-primary shadow">Kembali</a>
                  </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  
  </main>
            
  <?php $this->load->view('admin/_partials/footer.php'); ?>
                     
    
  <div>
    <p class="text-center mt-1">By Elsa Olivya</p>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?=base_url()?>dbadmin/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?=base_url()?>dbadmin/js/datatables-simple-demo.js"></script>
  <script src="<?=base_url()?>assets/js/jquery-3.3.1.js" ></script>
 <script src="<?= base_url()?>assets/js/bootstrap.js" ></script>
 <script src="<?= base_url()?>assets/js/jquery-ui.js" ></script>
 <script>
  $("#namaguru").autocomplete({
    source : "<?php echo site_url('Dashboard/get_autocomplete') ?>",

    select: function (event, ui) {
                    $('[name="namaguru"]').val(ui.item.label); 
                    $('[name="idguru"]').val(ui.item.idguru); 
                }
  });
 </script>
  
</body>

</html>