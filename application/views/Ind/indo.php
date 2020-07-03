<body class="hold-transition layout-top-nav">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
			<div class="container">
				<a href="<?= base_url(''); ?>" class="navbar-brand">
					<img src="<?= base_url('assets'); ?>/img/2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
					<span class="brand-text font-weight-light"><?= $title . $data;	 ?></span>
				</a>

				<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse order-3" id="navbarCollapse">

					<!-- Navbar Kanan -->
					<ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
						<!-- Messages Dropdown Menu -->
						<ul class="navbar-nav ">
							<li class="nav-item">
								<a href="<?= base_url('data/informasi'); ?>" class="nav-link">Pusat Informasi</a>
							</li>
							<li class="nav-item">
								<a href="<?= base_url('data/panduan'); ?>" class="nav-link">Panduan</a>
							</li>
						</ul>

					</ul>
				</div>
		</nav>
		<!-- /.navbar -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<div class="content">
				<div class="container">


				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
