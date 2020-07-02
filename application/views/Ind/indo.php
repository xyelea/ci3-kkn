<!-- Main Content -->
<style>
	@import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

	:root {
		--primary-color: #fb4c47;
		--title-color: #035755;
	}

	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	body {
		font-size: 16px;
		font-family: "poppins", sans-serif;
		line-height: 1.5rem;
	}

	head {
		width: 100%;
		height: 100vh;
		background-image: linear-gradient(to left, #fff, #b57474);
	}

	nav {
		display: flex;
		flex-direction: row;
		align-items: center;
		padding: 20px 70px;
		font-size: 18px;
		color: #035755;
		width: 100%;
	}

	.navbrand {
		display: flex;
		align-items: center;
		font-weight: 600;
	}

	.navbrand img {
		width: 50px;
		margin-right: 5px;
	}

	.nav-items {
		margin-left: auto;
	}

	.nav-items ul li {
		list-style: none;
		display: inline-block;
		margin: 0 20px;
		font-weight: bold;
	}

	.nav-items ul li a {
		text-decoration: none;
		color: #035755;
	}

	.nav-items ul li a:hover {
		color: #fb4c47;
		backface-visibility: hidden;
		font-weight: bold;
		position: relative;
	}

	.nav-items ul li a:hover::after {
		content: "";
		width: 8px;
		height: 8px;
		position: absolute;
		top: 100%;
		left: 50%;
		border-radius: 50%;
		background-color: #fb4c47;
		transition: 0.5s ease;
	}

	.btn {
		border: 3px solid #fb4c47;
		padding: 10px 25px;
		border-radius: 100px;
		font-weight: 700;
		background-color: #fff;
		cursor: pointer;
		color: #fb4c47;
	}

	.btn:hover {
		background-color: #fb4c47;
		color: #fff;
	}

	.head-page {
		width: 100%;
		display: grid;
		height: 85vh;
		grid-template-columns: 1fr 1.2fr;
		align-items: center;
	}

	.text {
		padding-left: 50px;
		line-height: 2rem;
		align-items: center;
	}

	.text h4 {
		font-weight: 800;
		color: #fb4c47;
		font-size: 25px;
	}

	.text h1 {
		font-weight: bolder;
		color: #035755;
		font-size: 40px;
		text-transform: capitalize;
		letter-spacing: 2px;
		line-height: 3rem;
	}

	.text p {
		font-weight: 500;
		font-size: 20px;
		color: #333;
		margin: 5px 0;
		text-align: justify;
	}

	.text button {
		border: none;
		background-color: #fb4c47;
		color: #fff;
		padding: 15px 30px;
		font-size: 18px;
		margin-top: 30px;
		cursor: pointer;
		border-radius: 100px;
	}

	.text button:hover {
		background-color: rgb(201, 49, 44);
	}

	.img-header {
		margin-left: 10%;
		margin-right: auto;
	}

	.illustration img {
		width: 90%;
	}

	/* Responsive Nav */
	.mobile-nav {
		display: none;

		margin-left: 65%;
	}

	.mobile-nav span {
		color: var(--primary-color);
		cursor: pointer;
		font-size: 26px;
	}

	.sidemenu {
		height: 100%;
		width: 0;
		position: fixed;
		z-index: 1;
		top: 0;
		right: 0;
		background-color: #fb4c47;
		transition: 0.5s;
	}

	.sidemenu a {
		color: #fff;
	}

	.sidemenu ul {
		text-align: center;
		padding: 0;
		list-style: none;
	}

	.sidemenu ul li {
		padding: 8px;
		font-size: 1.5rem;
	}

	a.closebtn {
		text-align: right;
		font-size: 2rem;
		margin: 20px;
	}

	@media screen and (max-width: 1040px) {
		.nav-items {
			display: none;
		}

		.mobile-nav {
			display: block;
			text-align: right;
		}

		.display-none {
			display: none;
		}

		.text {
			padding-left: 50px;
			line-height: 2rem;
			align-items: center;
		}

		.text h4 {
			font-weight: 800;
			color: #fb4c47;
			font-size: 19px;
		}

		.text h1 {
			font-weight: bolder;
			color: #035755;
			font-size: 19px;
			text-transform: capitalize;
			letter-spacing: 2px;
			line-height: 3rem;
		}

		.text p {
			font-weight: 500;
			font-size: 15px;
			color: #333;
			margin: 5px 0;
			text-align: justify;
		}

		.text button {
			border: none;
			background-color: #fb4c47;
			color: #fff;
			padding: 15px 30px;
			font-size: 13px;
			margin-top: 30px;
			cursor: pointer;
			border-radius: 100px;
		}

		button {
			width: 270px;
		}
	}

	@media screen and (max-width: 1200px) {
		.nav-items ul li {
			padding: 10px 0;
			margin: 0 1rem;
		}
	}
</style>

<body class="hold-transition">
	<!-- Topbar -->
	<div class="wrapper">

		<nav>
			<div class="main-header navbar navbar-expand navbar-white  navbar-light">
				<img src="<?= base_url('assets'); ?>/img/logo.svg" alt="" />
				<span class=""><?= $title . $data;	 ?></span>

				<!-- Menu -->
				<div class="nav-items float-right mb-0 mt-3">
					<ul>
						<!-- <li><a href="<?= base_url(''); ?>">Beranda</a></li> -->
						<li><a href="<?= base_url('data/informasi'); ?>"> Pusat Informasi</a></li>
						<li><a href="<?= base_url('data/panduan'); ?>"> Panduan</a></li>
						<!-- <li class="btn"><a href="<?= base_url('data/indonesia'); ?>" style="color: #035755;"> Data Persebaran <i class="fas fa-globe-asia"></i></a></li> -->
					</ul>
				</div>
				<div class="mobile-nav">
					<span class="" onclick="openNav()">&#9776;</span>
					<div id="mySidenav" class="sidemenu" style="background-color: #333;">
						<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
						<ul>
							<!-- <li><a href="<?= base_url(''); ?>"> Beranda</a></li> -->
							<!-- <li> Data Persebaran</a></li> -->
							<li><a href="<?= base_url('data/informasi'); ?>"> Pusat Informasi</li>
							<li><a href="<?= base_url('data/panduan'); ?>"> Panduan</a></li>
							<!-- <li class="btn"><a href="<?= base_url('data/indonesia'); ?>" style="color: #fff;"> Data Persebaran</a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</nav>

	</div>
	<!-- End of Topbar -->

	<!-------------------------------------
  HEADER
  --------------------------------------->
	<div class="jumbotron jumbotron-lg margin-top jumbotron-fluid mb-0 pb-3 bg-danger position-relative">
		<div class="container-fluid text-white h-100">
			<div class="d-lg-flex align-items-center justify-content-between pl-lg-5">
				<div class="col-4 pt-4 pb-4">
					<h1 class="display-3">Coronavirus Disease <i class="fas fa-viruses"></i></h1>
					<h3 class="font-weight-light mb-4 ml-1">Stay safe and clean <i class="fas fa-hands-wash"></i></h3>
				</div>
				<div class="col-7 p-5 align-self-bottom align-items-right text-right h-max-380 position-relative z-index-1">
					<img src="<?= base_url() ?>assets/img/1.png" class="rounded img-fluid mb-5">
				</div>
			</div>
		</div>
	</div>
	<!--- END HEADER -->

	<!-- Begin Page Content -->
	<div class="container-fluid mt-5 px-5">

		<div class="container-fluid mb-5">
			<div class="row">
				<div class="col-md-12 text-gray-800">
					<div class="txt1 text-center text-uppercase font-weight-bolder">COVID-19 <?= $data; ?></div>
					<div class="txt2 text-center text-uppercase font-weight-bolder">stay safe and clean</div>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-sm-4">
				<h1 class=""><?= tanggal() ?></h1>
			</div>
			<div class="col-sm-3 ml-auto">
				<a href="<?= base_url('data/peta') ?>">

					<button type="button" class="btn btn-block btn-danger btn-lg mt-3"><i class="fas fa-map"></i> Peta Persebaran</button>
			</div></a>
			<div class="col-sm-2 ml-6">
				<a href="<?= base_url('data/provinsi') ?>">

					<button type="button" class="btn btn-block btn-danger btn-lg mt-3"><i class="fas fa-table"></i> Provinsi</button>
				</a>
			</div>
		</div>

		<!-- Content Row -->
		<div class="row">
			<!-- Positif -->
			<div class="col-xl-6 col-md-6 mb-4">
				<div class="card border-left-danger shadow-sm h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text font-weight-bold text-danger h5 mb-1">Total Kasus</div>
								<div class="h2 mb-0 mt-2 ml-2 font-weight-bold text-gray-800"><?= number_format($indo['cases']); ?></div>
							</div>
							<div class="col-auto">
								<!-- <i class="fas fa-calendar fa-2x text-gray-400 mr-3"></i> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Hari ini -->
			<div class="col-xl-6 col-md-6 mb-4">
				<div class="card border-left-info shadow-sm h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text font-weight-bold text-info h5 mb-1">Hari ini</div>
								<div class="h2 mb-0 mt-2 ml-2 font-weight-bold text-gray-800">+ <?= number_format($indo['todayCases']); ?></div>
							</div>
							<div class="col-auto">
								<!-- <i class="fas fa-calendar fa-2x text-gray-400 mr-3"></i> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<!-- Sembuh -->
			<div class="col-xl-4 col-md-6 mb-4">
				<div class="card border-left-success shadow-sm h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text font-weight-bold text-success h5 mb-1">Sembuh</div>
								<div class="h2 mb-0 mt-2 ml-2 font-weight-bold text-gray-800"><?= number_format($indo['recovered']); ?></div>
							</div>
							<div class="col-auto">
								<!-- <i class="fas fa-calendar fa-2x text-gray-400 mr-3"></i> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Rawat -->
			<div class="col-xl-4 col-md-6 mb-4">
				<div class="card border-left-warning shadow-sm h-100 py-2 callout callout-warning elevation-3">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text font-weight-bold text-warning h5 mb-1">Aktif</div>
								<div class="h2 mb-0 mt-2 ml-2 font-weight-bold text-gray-800"><?= number_format($indo['active']); ?></div>
							</div>
							<div class="col-auto">
								<!-- <i class="fas fa-calendar fa-2x text-gray-400 mr-3"></i> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Meninggal -->
			<div class="col-xl-4 col-md-6 mb-4">
				<div class="card border-left-secondary shadow-sm h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text font-weight-bold text-secondary h5 mb-1">Meninggal <sup class="text font-weight-bold ml-1 text-danger"> +<?= number_format($indo['todayDeaths']); ?></sup></div>
								<div class="h2 mb-0 mt-2 ml-2 font-weight-bold text-gray-800"><?= number_format($indo['deaths']); ?></div>
							</div>
							<div class="col-auto">
								<!-- <i class="fas fa-calendar fa-2x text-gray-400 mr-3"></i> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

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
<!-- /.container-fluid -->


<!-- End of Main Content -->
