<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header.php');
?>
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Siswa</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<main>
	<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
                <span class="float-left"><a href="<?php echo base_url()?>admin/dashboard/datasiswa" class='btn btn-primary'><span class="fas fa-arrow-left"></span>Kembali</a></span>
              </div>
              <!-- /.card-header -->
              <?php foreach($siswa as $siswa){ ?>
              <!-- form start -->
              <form action="<?php echo base_url()?>admin/Dashboard/updatesiswa" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="idsiswa">ID Siswa</label>
                    <input type="text" class="form-control" id="idsiswa" name="idsiswa" value="<?php echo $siswa->idsiswa ?>" readonly>
                  </div>
                   <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="text" class="form-control" id="nis" name="nis" value="<?php echo $siswa->nis ?>">
                  </div>
                  <div class="form-group">
                    <label for="namasiswa">Nama Siswa</label>
                    <input type="text" class="form-control" id="namasiswa" name="namasiswa" value="<?php echo $siswa->namasiswa ?>">
                  </div>
                  <div class="form-group">
                  <label for="kelas">Kelas</label>
                  <input type="text" name="kelas" class="form-control" value="<?php echo $siswa->kelas ?>">
                  </div>
                  <div class="form-group">
                    <label for="tahunajaran">Tahun Ajaran</label>
                    <input type="text" class="form-control" id="tahunajaran" name="tahunajaran" value="<?php echo $siswa->tahunajaran ?>">
                  </div>
                  <div class="form-group">
                    <label for="biaya">Biaya</label>
                    <input type="text" class="form-control" id="biaya" name="biaya" value="<?php echo $siswa->biaya ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" value="Simpan" class="btn btn-primary"></input>
                </div>
              </form>
              <?php } ?>
            </div>
            <!-- /.card -->
					</div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</main>
</body>
<?php $this->load->view('templates/footer.php'); ?>
</html>