<body class="hold-transition sidebar-mini">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white  navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="<?= base_url('data') ?>" role="button"><span class="popi"><i class="fas fa-bars"></i></span> </a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('') ?>" class="nav-link"><span class="popi"> Beranda</span></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('informasi') ?>" class="nav-link"><span class="popi"> Pusat Informasi</span></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('panduan') ?>" class="nav-link"><span class="popi">Panduan</span> </a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('persebaran') ?>" class="nav-link"><span class="popi"> Data Persebaran</span></a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-light-danger elevation-4">
			<!-- Brand Logo -->
			<a href="<?= base_url('') ?>" class="brand-link">
				<img src="<?= base_url('assets') ?>/img/2.png" alt="Covid Tracker Logo" class="brand-image img-circle elevation-3" style="opacity: .7">
				<span class="brand-text popi ">
					<h4 class="text-center">Covid Tracker</h4>
				</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">


				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<li class="nav-item has-treeview menu-open">
							<a href="" class="nav-link active">
								<i class="nav-icon fas fa-viruses"></i>
								<p>
									Kamus Covid-19
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('informasi') ?>" class="nav-link">
										<i class="fas fa-virus nav-icon"></i>
										<p>Covid-19</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="<?= base_url('informasi/simptomatik') ?>" class="nav-link">
										<i class="fas fa-head-side-cough nav-icon"></i>
										<p>Simptomatik</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="<?= base_url('informasi/asimptomatik') ?>" class="nav-link">
										<i class="fas fa-head-side-cough-slash nav-icon"></i>
										<p>Asimptomatik</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="<?= base_url('informasi/pasien') ?>" class="nav-link">
										<i class="fas fa-user-nurse nav-icon"></i>
										<p>Pasien Dan Lainnya</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="<?= base_url('informasi/psbb') ?>" class="nav-link">
										<i class="fas fa-shield-virus nav-icon"></i>
										<p>PSBB</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="<?= base_url('informasi/new_normal') ?>" class="nav-link">
										<i class="fas fa-head-side-virus nav-icon"></i>
										<p>AKB</p>
									</a>
								</li>
								<!-- End Dropdown Menu -->
							</ul>


						<li class="nav-item">
							<a href="<?= base_url('informasi/call_center') ?>" class="nav-link">
								<i class="nav-icon fas fa-phone-alt"></i>
								<p>
									Call Center
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?= base_url('informasi/website_resmi') ?>" class="nav-link">
								<i class="nav-icon fas fa-wifi"></i>
								<p>
									Website Resmi
								</p>
							</a>
						</li>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>
