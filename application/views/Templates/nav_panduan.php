<body class="hold-transition sidebar-mini">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white  navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="<?= base_url('data/panduan') ?>" role="button"><span class="popi"> <i class="fas fa-bars"></i></span></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('') ?>" class="nav-link"><span class="popi"> Beranda</span></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('data/informasi') ?>" class="nav-link"><span class="popi"> Pusat Informasi</span></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('data/panduan') ?>" class="nav-link"><span class="popi"> Panduan</span></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('data/indonesia') ?>" class="nav-link"><span class="popi"> Data Persebaran</span></a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-light-danger elevation-4">
			<!-- Brand Logo -->
			<a href="<?= base_url('') ?>" class="brand-link">
				<img src="<?= base_url('assets') ?>/img/2.png" alt="Covid Tracker Logo" class="brand-image img-circle elevation-3" style="opacity: .7">
				<span class="brand-text font-weight-light popi">
					<h4 class="text-center">Covid Tracker</h4>
				</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<li class="nav-item has-treeview menu-open">
							<a href="<?= base_url('data/panduan') ?>" class="nav-link active">
								<i class="nav-icon fas fa-viruses"></i>
								<p>
									Daftar panduan
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('data/panduan_masker') ?>" class="nav-link">
										<i class="fas fa-head-side-mask nav-icon"></i>
										<p>Masker</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="<?= base_url('data/panduan_gejala') ?>" class="nav-link">
										<i class="fas fa-head-side-virus nav-icon"></i>
										<p>Jika Mengalami Gejala</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="<?= base_url('data/panduan_new_normal') ?>" class="nav-link">
										<i class="fas fa-shield-virus nav-icon"></i>
										<p>Adaptasi Kebiasaan Baru</p>
									</a>
								</li>
							</ul>
						</li>

					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>
