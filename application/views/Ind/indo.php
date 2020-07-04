<body class="hold-transition layout-top-nav">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
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
		<!-- /.navbar -->

		<!-- Content Wrapper. Contains page content -->

		<div class="content">
			<!-- <div class="jumbotron jumbotron-fluid bg-danger">
				<div class="container">
					<h1 class="display-1">Awas Bahaya Covid-19 <i class="fas fa-viruses"></i> !</h1>
					<p class="lead">Jaga Jarak Sosial Dan Cuci Tangan Setelah keluar Rumah.</p>
					<img src="<?= base_url() ?>assets/img/4.svg" alt="" srcset="">
				</div>
			</div> -->
		</div>

		<!-- /.container-fluid -->
	</div>
	<!-- /.content -->

	<!-- /.content-wrapper -->
