<body class="hold-transition sidebar-mini">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white  navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><span class="popi"> <i class="fas fa-bars"></i></span></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('data') ?>" class="nav-link"><span class="popi">Beranda</span> </a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('data/informasi') ?>" class="nav-link"><span class="popi"> Pusat Informasi </span></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('data/panduan') ?>" class="nav-link"><span class="popi"> Panduan </span></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('data/indonesia') ?>" class="nav-link"><span class="popi"> Data Persebaran</span></a>
				</li>
			</ul>

			<!-- SEARCH FORM -->
			<!-- <form class="form-inline ml-3">
				<div class="input-group input-group-sm">
					<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form> -->

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-light-danger elevation-4">
			<!-- Brand Logo -->
			<a href="<?= base_url('data') ?>" class="brand-link">
				<img src="<?= base_url('assets') ?>/img/2.png" alt="Covid Tracker Logo" class="brand-image img-circle elevation-3" style="opacity: .7">
				<span class="brand-text font-weight-light popi">
					<h4 class="text-center">Covid Tracker</h4>
				</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">

					<div class="info">
						<a href="#" class="d-block ml-5">
							<i class="brand-image fas fa-book-medical ml-2 elevation-3 img-circle"></i> Panduan
						</a>
					</div>
				</div> -->

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
							 with font-awesome or any other icon font library -->
						<li class="nav-item has-treeview menu-open">
							<a href="#" class="nav-link active">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('data/peta') ?>" class="nav-link">
										<i class="fas fa-globe-europe nav-icon"></i>
										<p>Dunia</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('data/peta_db_id') ?>" class="nav-link">
										<i class="fas fa-globe-asia nav-icon"></i>
										<p>Indonesia</p>
									</a>
								</li>
							</ul>
						<li class="nav-item has-treeview menu-open">
							<a href="#" class="nav-link active">
								<i class="nav-icon fas fa-map"></i>
								<p>
									Daftar Peta
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('data/peta_dunia') ?>" class="nav-link">
										<i class="fas fa-globe-europe nav-icon"></i>
										<p>Dunia</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('data/peta_tenaga_medis') ?>" class="nav-link">
										<i class="fas fa-globe-asia nav-icon"></i>
										<p>Tenaga Medis</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('data/peta_rentan') ?>" class="nav-link">
										<i class="fas fa-globe-asia nav-icon"></i>
										<p>Rasio Kerentanan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('data/peta_rs') ?>" class="nav-link">
										<i class="fas fa-book-medical nav-icon"></i>
										<p>Fasilitas Kesehatan</p>
									</a>
								</li>
							</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>
