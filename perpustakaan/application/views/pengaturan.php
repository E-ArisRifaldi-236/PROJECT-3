<!DOCTYPE html>
<html lang="en">

<head>

  <title>Pengaturan</title>
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sbadmin/vendor/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <?php $this->load->view('_partials/head'); ?>

</head>

<body id="page-top">

  <div id="wrapper">

    <?php $this->load->view('_includes/sidebar'); ?>
    
    <div id="content-wrapper" class="d-flex flex-column">

     
      <div id="content">

     
        <?php $this->load->view('_includes/topbar'); ?>
   
        <div class="container-fluid">

          <h1 class="h3 mb-4 text-gray-800">Pengaturan</h1>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pengaturan</h6>
            </div>
            <div class="card-body">
              <form id="form">
                <div class="form-group">
                  <label>Nama Perpustakaan</label>
                  <input type="text" name="nama" placeholder="Nama" class="form-control" value="<?php echo $perpustakaan->nama ?>" required>
                </div>
                <div class="form-group">
                  <label>Harga Denda (Per Hari)</label>
                  <input type="number" placeholder="Denda" name="denda" class="form-control" value="<?php echo $perpustakaan->denda ?>" required>
                </div>
                <div class="form-group">
                  <label>Tentang Perpustakaan</label>
                  <textarea name="tentang" rows="4" class="form-control" placeholder="Tentang" required><?php echo trim($this->session->userdata('perpustakaan')->tentang) ?></textarea>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary shadow">Simpan</button>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
      <?php $this->load->view('_includes/footer'); ?>

    </div>
    
  </div>

  <?php $this->load->view('_partials/foot'); ?>

  <script src="<?php echo base_url() ?>assets/sbadmin/vendor/jquery-validation/jquery.validate.min.js"></script>
  <script src="<?php echo base_url() ?>assets/sbadmin/vendor/sweetalert2/sweetalert2.min.js"></script>

  <script>
    let simpan_url = '<?php echo site_url('pengaturan/simpan') ?>'
  </script>
  <script src="<?php echo base_url() ?>assets/js/pengaturan.js"></script>

</body>

</html>
