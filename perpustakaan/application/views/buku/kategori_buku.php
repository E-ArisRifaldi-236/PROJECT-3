<!DOCTYPE html>
<html lang="en">

<head>

  <title>Kategori Buku</title>
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sbadmin/vendor/datatables/dataTables.bootstrap4.min.css">
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

          <h1 class="h3 mb-4 text-gray-800">Kategori Buku</h1>

          <div class="card shadow mb-4">
            <div class="card-header align-items-center py-6 d-flex">
              <h6 class="m-0 font-weight-bold text-primary">Kategori Buku</h6>
              <div class="col d-flex p-0 justify-content-end">
                <div>
                  <button class="btn btn-primary shadow-sm btn-sm" id="tambah">Tambah</button>
                  <button class="btn btn-danger shadow-sm btn-sm action d-none" id="hapus">Hapus</button>
                  <button class="btn btn-success shadow-sm btn-sm action d-none" id="edit">Edit</button>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellpadding="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                  </tr>
                </thead>
              </table>
              </div>
            </div>
          </div>

        </div>
       

      </div>
  
      <?php $this->load->view('_includes/footer'); ?>
      

    </div>
    

  </div>
  

  <div class="modal">
  <div class="modal-dialog">
  <div class="modal-content">
  <form id="form">
    <div class="modal-header">
      <h5 class="modal-title">Tambah</h5>
      <button class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Nama" class="form-control" required>
      </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-primary shadow" type="submit">Tambah</button>
      <button class="btn btn-danger shadow" data-dismiss="modal">Batal</button>
    </div>
  </form>
  </div>
  </div>
  </div>

  <?php $this->load->view('_partials/foot'); ?>

  <script src="<?php echo base_url() ?>assets/sbadmin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>assets/sbadmin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url() ?>assets/sbadmin/vendor/jquery-validation/jquery.validate.min.js"></script>
  <script src="<?php echo base_url() ?>assets/sbadmin/vendor/sweetalert2/sweetalert2.min.js"></script>

  <script>
    let add_url = '<?php echo site_url('kategori_buku/add') ?>'
    let read_url = '<?php echo site_url('kategori_buku/read') ?>'
    let edit_url = '<?php echo site_url('kategori_buku/edit') ?>'
    let delete_url = '<?php echo site_url('kategori_buku/delete') ?>'
  </script>
  <script src="<?php echo base_url() ?>assets/js/kategori_buku.js"></script>

</body>

</html>
