<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('') ?>">
    <div class="sidebar-brand-text mx-3"><?php echo $this->session->userdata('perpustakaan')->nama; ?></div>
  </a>

  
  <hr class="sidebar-divider my-0">

  
  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url() ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  
  <hr class="sidebar-divider">

 
  <div class="sidebar-heading">
    Master
  </div>

  
  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-book"></i>
      <span>Buku</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Buku</h6>
        <a class="collapse-item" href="<?php echo site_url('buku') ?>">Data Buku</a>
        <a class="collapse-item" href="<?php echo site_url('kategori_buku') ?>">Kategori Buku</a>
      </div>
    </div>
  </li>

  
  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('anggota') ?>">
      <i class="fas fa-fw fa-user"></i>
      <span>Anggota</span>
    </a>
  </li>

  
  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('peminjaman') ?>">
      <i class="fas fa-fw fa-book-open"></i>
      <span>Peminjaman</span>
    </a>
  </li>

  
  <hr class="sidebar-divider">

  
  <div class="sidebar-heading">
    Perpustakaan
  </div>

  
  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('pengguna') ?>">
      <i class="fas fa-fw fa-user"></i>
      <span>Pengguna</span></a>
  </li>

  
  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('pengaturan') ?>">
      <i class="fas fa-fw fa-cog"></i>
      <span>Pengaturan</span></a>
  </li>


  <hr class="sidebar-divider d-none d-md-block">


  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>