<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header.php');
?>
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Siswa</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<main>
	<div class="container-fluid">
        <div class="row">
          <div class="col-12">
		<div class="card">
              <div class="card-header">
                <div class="float-right">
				<a href="<?php echo base_url(); ?>index.php/user/dashboard/forminputsiswa" id="tambah" class="btn btn-primary shadow">Tambah Data</a>|| <a href="<?php echo base_url(); ?>index.php/user/dashboard/cetak" class="btn btn-primary shadow">Cetak Data</a>
			</div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>NIS</th>
						<th>Nama Siswa</th>
						<th>Kelas</th>
						<th>Tahun Ajaran</th>
						<th>Biaya</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody id="tbody">
				



<?php
						$no = 1;
                         foreach ($siswa as $siswa){
                             ?>
                            <tr>
                                <td> <?php echo $no;  ?> </td>
                                <td> <?php echo $siswa->nis;  ?> </td>
                                <td> <?php echo $siswa->namasiswa;  ?> </td>
                                <td> <?php echo $siswa->kelas;  ?> </td>
                                <td> <?php echo $siswa->tahunajaran;  ?> </td>
                                <td> <?php echo $siswa->biaya;  ?> </td>
                                <td> <a href="<?php echo base_url(); ?>user/Dashboard/editsiswa/<?php echo $siswa->idsiswa; ?>" class="btn btn-success"><span 
                                class="glyphicon glyphicon-edit"></span> Edit </a> ||
                                 <a href ="<?php echo base_url(); ?>user/Dashboard/hapussiswa/<?php echo 
                                $siswa->idsiswa; ?>" class="btn btn-danger"><span class="glyphicon 
                                glyphicon-trash"></span> Delete </a> </td>
                            </tr> 
							
                           <?php 
						   $no++;    
                        }
                       ?>
				</tbody>
			</table>
			</div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </main>              
</body>
  <?php $this->load->view('templates/footer.php');
   $this->load->view('user/_partials/js.php'); ?>
</html>
