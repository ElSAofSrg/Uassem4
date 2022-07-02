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
    <div class="col-md-2 offset-1 mt-1">
			<h3>Edit Form
				<span class="pull-right"><a href="<?php echo base_url();?>" class='btn btn-primary'><span class="glyphicon glyphicon arrow-left"></span>Back</a></span>
			</h3>
			<hr>
			
			<?php foreach($guru as $guru){ ?>
	<form action="<?php echo base_url() ; ?>index.php/Dashboard/updateguru" method="post">
		<table style="margin:20px auto;">
		<tr>
				<td>Id Guru</td>
				<td>
				
					<input type="text" name="idguru" value="<?php echo $guru->idguru ?>" readonly>
				</td>
			</tr>	
        <tr>
				<td>Nik</td>
				<td>
				
					<input type="text" name="nik" value="<?php echo $guru->nik ?>">
				</td>
			</tr>
			<tr>
				<td>Nama Guru</td>
				<td><input type="text" name="namaguru" value="<?php echo $guru->namaguru ?>"></td>
			</tr>
			
            <tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $guru->alamat ?>"></td>
			</tr>
            <tr>
				<td>Telepon</td>
				<td><input type="text" name="telp" value="<?php echo $guru->telp ?>"></td>
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

</body>
</html>