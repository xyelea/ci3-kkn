<!-- Main Content -->

<body class="hold-transition">
	<!-- Topbar -->
	<div class="main-header navbar navbar-expand navbar-light navbar-white">
		<div class="container">
			<a href="<?= base_url(''); ?>" class="navbar-brand">
				<img src="<?= base_url('assets'); ?>/img/2.png" alt="CTI Logo" class="brand-link img-circle elevation-3" style="opacity: 1">
				<span class="brand-text font-weight-light"><?= $title . $data;	 ?></span>
			</a>
			<u class="navbar-nav">

			</u>
		</div>
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
