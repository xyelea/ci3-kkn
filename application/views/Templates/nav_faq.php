<body class="hold-transition sidebar-mini">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white  navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav ">
				<li class="nav-item ">
					<a class="nav-link " data-widget="pushmenu" href="#" role="button"> <span class="popi"><i class="fas fa-bars "></i></span></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('') ?>" class="nav-link"><span class="popi"> Beranda</span></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('data/informasi') ?>" class="nav-link"><span class="popi"> Pusat Informasi</span></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('data/panduan') ?>" class="nav-link"><span class="popi">Panduan</span> </a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('data/indonesia') ?>" class="nav-link"><span class="popi">Data Persebaran</span> </a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-light-danger elevation-4">
			<!-- Brand Logo -->
			<a href="<?= base_url('') ?>" class="brand-link mt-0">
				<img src="<?= base_url('assets') ?>/img/2.png" alt="Covid Tracker Logo" class="brand-image ">
				<span class="brand-text popi">
					<h4 class="text-center mb-0">Covid Tracker</h4>
				</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<li class="nav-item ">
							<a href="<?= base_url('data/faq') ?>" class="nav-link active">
								<i class="fas fa-question-circle nav-icon"></i>
								<p>Pertanyaan Umum</p>
							</a>
						</li>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>
