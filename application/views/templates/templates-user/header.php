<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Pustaka-Booking | <?= $judul; ?></title>
	<link rel="icon" type="image/png" href="<?= base_url('assets/img/logo/'); ?>logo-pb.png">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>user/css/bootstrap.css">
	<link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css">
</head> 
 
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url(); ?>">Pustaka</a>
			<button class="navbar-toggler" type="button" datatoggle="collapse" data-target="#navbarNavAltMarkup" ariacontrols="navbarNavAltMarkup" aria-expanded="false" arialabel="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link active" href="<?= base_url(); ?>"><svg class="bi bi-house-door" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 01.708 0l6 6a.5.5 0 01.146.354v7a.5.5 0 01-.5.5H9.5a.5.5 0 01-.5-.5v-4H7v4a.5.5 0 01-.5.5H2a.5.5 0 01-.5-.5v-7a.5.5 0 01.146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 01.5-.5h3a.5.5 0 01.5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd"/>
</svg> Beranda <span class="sr-only">(current)</span></a>
					<?php
					if (!empty($this->session->userdata('email'))) { ?>                         
						<a class="nav-item nav-link" href="<?= base_url('booking'); ?>">Booking <b><?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?></b> Buku</a>
						<a class="nav-item nav-link" onclick="information('Waktu Pengambilan Buku 1x24 jam dari Booking!!!')" href="<?php echo base_url() . 'booking/exportToPdf/' . $this->session->userdata('id_user'); ?>">Cetak Bukti Booking</a>

					<a class="nav-item nav-link" href="<?= base_url('member/myprofil'); ?>">Profil Saya</a>
					<a class="nav-item nav-link" href="<?= base_url('member/logout'); ?>"><i class="fas fw fa-login"></i> Log out</a>

					<?php } else { ?>

					<a class="nav-item nav-link" data-toggle="modal" data-target="#daftarModal" href="#"><i class="fas fw fa-login"></i> Daftar</a>
					<a class="nav-item nav-link" data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fw fa-login"></i> Log in</a>
					<?php } ?>
					<span class="nav-item nav-link nav-right" style="display:block; margin-left:20px;"><svg class="bi bi-people-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z"/>
  <path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z" clip-rule="evenodd"/>
</svg>Selamat Datang <b><?= $user; ?></b></span>
				</div>
			</div>
		</div>
	</nav>
	<div class="container mt-5">