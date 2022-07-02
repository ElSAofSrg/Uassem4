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
	<h2 class="text-center mt-2">Data Walikelas</h2>
	<div class="container">
		<div class="clearfixs">
			<div class="float-right">
				<a href="<?php echo base_url(); ?>index.php/Dashboard/forminputwakel" id="tambah" class="btn btn-primary shadow">Tambah Data</a>
			</div>
			<div class="float-left">
				<a href="<?php echo base_url(); ?>index.php" id="tambah" class="btn btn-primary shadow">Kembali</a>
			</div>
		</div>
		<div class="text-center mt-2">
			<table class="table table-bordered shadow" border="1">
				<thead id="thead">
					<tr>
						<th>No</th>
						<th>ID Guru</th>
						<th>Kelas</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody id="tbody">
					<?php  
						
						$no = 1;
                         foreach ($walikelas as $walikelas){
                             ?>
                            <tr>
                                <td> <?php echo $no;  ?> </td>
                                <td> <?php echo $walikelas->idguru;  ?> </td>
                                <td> <?php echo $walikelas->kelas;  ?> </td>
                               
                                <td> <a href="<?php echo base_url(); ?>index.php/Dashboard/editwakel/<?php echo $walikelas->idguru; ?>" class="btn btn-success"><span 
                                class="glyphicon glyphicon-edit"></span> Edit </a> ||
                                 <a href ="<?php echo base_url(); ?>index.php/Dashboard/hapuswakel/<?php echo 
                                $walikelas->idguru; ?>" class="btn btn-danger"><span class="glyphicon 
                                glyphicon-trash"></span> Delete </a> </td>
                            </tr> 
							
                           <?php 
						   $no++;    
                        }
                       
					?>
				</tbody>
			</table>
		</div>
	</div>
	<div>
    <p class="text-center mt-1">By Elsa Olivya</p>
  </div>
</body>
</html>
