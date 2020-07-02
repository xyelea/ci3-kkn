<!-- Main Content -->
<div id="content">

	<!-- Topbar -->
	<nav class="navbar navbar-expand navbar-light mb-5 bg-white topbar fixed-top">
		<!-- Nav - Brand -->
		<a class="navbar-brand d-flex align-items-center justify-content-center ml-4" href="<?= base_url(); ?>">
			<div class="navbar-brand brand-text font-weight-bold ml-2 mx-3">COVID ID</div>
		</a>
		<!-- Topbar Navbar -->
		<ul class="navbar-nav ml-auto">
			<!-- Nav Item - User Information -->
			<li class="nav-item">
				<!-- Topbar Search -->
				<form class="d-none d-sm-inline-block form-inline mr-4 ml-md-3 my-2 my-md-0 mw-100 navbar-search">
					<div class="input-group">
						<input type="text" class="form-control bg-light border-0 small" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2" aria-autocomplete="off">
						<div class="input-group-append">
							<button class="btn btn-primary" type="submit">
								<i class="fas fa-search fa-sm"></i>
							</button>
						</div>
					</div>
				</form>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('data/indonesia') ?>" class="d-none d-sm-inline-block btn btn-outline-primary text-uppercase">World</a>
			</li>
		</ul>

	</nav>
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

		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h5 mb-0 text-gray-800"><?= date('l, d M Y') ?></h1>
			<div class="justify-content-end">
				<a href="<?= base_url('data/provinsi') ?>" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-table fa-sm text-white-50 mr-2"></i>Province</a>
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
								<div class="text font-weight-bold text-danger h5 mb-1">Confirmed</div>
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
								<div class="text font-weight-bold text-info h5 mb-1">Today</div>
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
								<div class="text font-weight-bold text-success h5 mb-1">Recovered</div>
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
								<div class="text font-weight-bold text-warning h5 mb-1">Active</div>
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
								<div class="text font-weight-bold text-secondary h5 mb-1">Deaths <sup class="text font-weight-bold ml-1 text-danger"> +<?= number_format($indo['todayDeaths']); ?></sup></div>
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
</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
