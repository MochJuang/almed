<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	    <link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
	    <link href="<?php echo base_url() ?>/assets/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<!-- NAVBAR -->
	<nav id="main-navbar" class="navbar navbar-expand-md navbar-dark bg-dark py-0">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <span class="d-none">ALTIE MEDIA</span>
          <span class="main-logo">ALTIE MEDIA</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link p-4 <?php echo ($header == 'home') ? 'active' : '' ?>" href="<?php echo base_url() ?>front/home">Beranda</a>
            </li>
            <li class="nav-tem">
              <a class="nav-link p-4 <?php echo ($header == 'jadwal') ? 'active' : '' ?>" href="<?php echo base_url() ?>front/jadwal">Jadwal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-4 <?php echo ($header == 'blog') ? 'active' : '' ?>" href="<?php echo base_url() ?>front/blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-4 <?php echo ($header == 'video') ? 'active' : '' ?>" href="<?php echo base_url() ?>front/video">Video</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-4 <?php echo ($header == 'galeri') ? 'active' : '' ?>" href="<?php echo base_url() ?>front/galeri">Galeri</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>

</body>
</html>