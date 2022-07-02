<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('admin/_partials/head.php'); ?>  
</head>
<body>
<?php $this->load->view('admin/_partials/navbar.php'); ?>
<?php $this->load->view('admin/_partials/sidebar.php'); ?>
<div id="layoutSidenav_content">
<main>
<div class='container'>
	<h1 class='page header text-center'> Edit Wali kelas</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Edit Form
				<span class="pull-right"><a href="<?php echo base_url();?>" class='btn btn-primary'><span class="glyphicon glyphicon arrow-left"></span>Back</a></span>
			</h3>
			<hr>
			
			<?php foreach($walikelas as $walikelas){ ?>
	<form action="<?php echo base_url() ; ?>index.php/Dashboard/updatewakel" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
				
					<input type="text" name="idguru" value="<?php echo $walikelas->idguru ?>">
				</td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas" value="<?php echo $walikelas->kelas ?>"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
		</div>
	</div>
</div>
</main>
            
            <?php $this->load->view('admin/_partials/footer.php'); ?>
                               
              
            <div>
              <p class="text-center mt-1">By Elsa Olivya</p>
            </div>

</html>