<body class=" hold-transition layout-top-nav">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand-md navbar-light navbar-white fixed-top">
			<div class="container">
				<a href="<?= base_url(''); ?>" class="navbar-brand">
					<img src="<?= base_url('assets'); ?>/img/2.png" alt=" Logo" class="brand-image ">
					<span class="brand-text font-weight-bold popi"><?= $title . $data;	 ?></span>
				</a>

				<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse order-3" id="navbarCollapse">

					<!-- Navbar Kanan -->
					<ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto ">
						<!-- Messages Dropdown Menu -->
						<ul class="navbar-nav  ">
							<li class="nav-item">
								<a href="<?= base_url('data/informasi'); ?>" class="nav-link">
									<span class="popi font-weight-bold"> Pusat Informasi</span></a>
							</li>
							<li class="nav-item">
								<a href="<?= base_url('data/panduan'); ?>" class="nav-link"><span class="popi font-weight-bold"> Panduan</span></a>
							</li>
						</ul>

					</ul>
				</div>
		</nav>
		<!-- Jumbotron -->
		<div class="jumbotron jumbotron-fluid bg-danger">
			<div class="container container-fluid">
				<div class="d-lg-flex align-items-center justify-content-between pl-lg-5">
					<h1 class="display-5 ml-0"><br>Awas Covid-19 <i class="fas fa-viruses"></i></h1>
					<h3 class="font-weight-light mb-4 ml-1">Hindari Kontak Fisik dan Gunakan Masker Saat keluar Rumah</h3><img src="<?= base_url('assets'); ?>/img/1.svg" alt="" srcset="">
					<div class="">

					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid mt-5 px-5">
			<div class="row">
				<div class="col-md-12 text-gray-800">
					<div class="txt1 text-center text-uppercase font-weight-bolder">
						<h1>DATA PERSEBARAN COVID-19 <?= $data; ?></h1>
					</div>
					<div class="txt2 text-center text-uppercase font-weight-bolder">*Data Bersumber dari Jhon Hopkins University,&nbsp; Akan ada Perbedaan Antar data Akibat Jadwal Update API yang berbeda.</div>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->

		<!-- /.content -->

		<!-- /.content-wrapper -->
