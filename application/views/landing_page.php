<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no" />
	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/css/landing_page.css" />
	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/fontawesome.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.google.com/specimen/Red+Hat+Display?query=red+ha&sidebar.open&selection.family=Red+Hat+Display:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900" />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
	<!-- Bootsrap CSS -->
	<!-- <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    /> -->
	<!-- Bootsrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<!-- Judul Tab -->
	<title><?= $title . $data;	 ?></title>
</head>

<body>
	<div class="head">
		<!-- Logo -->
		<nav>
			<div class="navbrand">
				<img src="<?= base_url('assets'); ?>/img/logo.svg" alt="" />
				<span>Covid Tracker | Indonesia</span>
			</div>
			<!-- Menu -->
			<div class="nav-items">
				<ul>
					<li><a href="<?= base_url(''); ?>">Beranda</a></li>
					<li><a href="<?= base_url('data/informasi'); ?>"> Pusat Informasi</a></li>
					<li><a href="<?= base_url('data/panduan'); ?>"> Panduan</a></li>
					<li class="btn"><a href="<?= base_url('data/indonesia'); ?>" style="color: #035755;"> Data Persebaran</a></li>
				</ul>
			</div>
			<div class="mobile-nav">
				<span class="" onclick="openNav()">&#9776;</span>
				<div id="mySidenav" class="sidemenu">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					<ul>
						<li><a href="<?= base_url(''); ?>"> Beranda</a></li>
						<li><a href="<?= base_url('data/indonesia'); ?>"> Data Persebaran</a></li>
						<li><a href="<?= base_url('data/informasi'); ?>"> Pusat Informasi</a></li>
						<li><a href="<?= base_url('data/panduan'); ?>"> Panduan</a></li>
						<li class="btn">Data Persebaran</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- banner -->
		<div class="head-page">
			<div class="text">
				<h4>Awas ! Covid-19 !</h4>
				<h1>Jaga Jarak Sosial dan Kebersihan</h1>
				<p>
					Belum ada Obat Spesifik untuk mencegah maupun mengobati corona virus
					disease (COVID-19).
				</p>
				<button>Pertanyaan yang sering diajukan..</button>
			</div>
			<!-- gambar -->
			<div class="illustration">
				<img class="img-header" src="<?= base_url('assets'); ?>/img/illustration 01.svg" alt="">
			</div>
		</div>
	</div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "100%";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
</script>
