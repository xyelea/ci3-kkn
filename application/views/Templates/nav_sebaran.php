<body class=" hold-transition layout-top-nav">
	<div class="wrapper">

		<!-- Topbar -->
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
								<a href="<?= base_url('informasi'); ?>" class="nav-link">
									<h5 class="popi font-weight-bold"> Pusat Informasi</h5>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= base_url('data/panduan'); ?>" class="nav-link">
									<h5 class="popi font-weight-bold"> Panduan</h5>
								</a>
							</li>
						</ul>
					</ul>
				</div>
		</nav>
