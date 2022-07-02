<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('templates/header'); ?>
<body class="sb-nav-fixed">
<div id="layoutSidenav_content">
<main>
	<h2 class="text-center mt-2">Data Guru</h2>
	<div class="container">
		<div class="clearfixs">
			<div class="float-right">
				<a href="<?php echo base_url(); ?>index.php/Dashboard/forminputguru" id="tambah" class="btn btn-primary shadow">Tambah Data</a>
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
						<th>NIK</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody id="tbody">
				
					<?php
						$no = 1;
                         foreach ($guru as $guru){
                             ?>
                            <tr>
                                <td> <?php echo $no;  ?> </td>
								<td> <?php echo $guru->nik;  ?> </td>
                                <td> <?php echo $guru->namaguru;  ?> </td>
                                <td> <?php echo $guru->alamat;  ?> </td>
                                <td> <?php echo $guru->telp;  ?> </td>
                               
                                <td> <a href="<?php echo base_url(); ?>admin/Dashboard/editguru/<?php echo $guru->idguru; ?>" class="btn btn-success"><span 
                                class="glyphicon glyphicon-edit"></span> Edit </a> ||
                                 <a href ="<?php echo base_url(); ?>admin/Dashboard/hapusguru/<?php echo 
                                $guru->idguru; ?>" class="btn btn-danger"><span class="glyphicon 
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
  </div>
  </main>
             
                
</body>
<?php $this->load->view('templates/footer.php');
 $this->load->view('admin/_partials/js.php'); ?>
</html>
</body>
</html>
