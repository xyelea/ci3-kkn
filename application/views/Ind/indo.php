<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid bg-danger">
	<div class="container container-fluid">
		<div class="d-lg-flex  align-items-center pl-lg-5 ">
			<h3 class="font-weight-light">Gunakanlah Masker Saat keluar Rumah</h3>
			<img src="<?= base_url('assets'); ?>/img/1.svg" alt="" srcset="" class="">
		</div>

	</div>
</div>

<div class="row">
	<div class="col-md-12 text-gray-800">
		<div class="txt1 text-center text-uppercase font-weight-bolder">
			<h1>DATA PERSEBARAN COVID-19 <?= $data; ?></h1>
		</div>
		<div class="txt2 text-center text-uppercase font-weight-bolder">*Data Bersumber dari Jhon Hopkins University,&nbsp; Akan ada Perbedaan Antar data Akibat Jadwal Update API yang berbeda.</div>
	</div>
</div>


<div class="row">
	<div class="col-sm-3 mt-3">
		<h1 class=""><?= tanggal() ?></h1>
	</div>
	<div class="col-sm-4  ml-auto mt-3 btn-group">
		<a href="<?= base_url('data/dunia') ?>">
			<button type="button" class="btn btn-block btn-danger btn-lg mt-3"><i class="fas fa-globe-asia"></i> Dunia</button>
		</a>&nbsp;
		<a href="<?= base_url('data/peta') ?>">
			<button type="button" class="btn btn-block btn-danger btn-lg mt-3"><i class="fas fa-map"></i> Peta Persebaran</button>
		</a>&nbsp;
		<a href="<?= base_url('data/provinsi') ?>">
			<button type="button" class="btn btn-block btn-danger btn-lg mt-3"><i class="fas fa-table"></i> Provinsi</button>
		</a>
	</div>
</div>

<!-- Content Row -->
<div class="row">
	<!-- Positif -->
	<div class="col-xl-3 col-md-6 mb-4 mt-5">
		<div class=" h-100 callout callout-danger elevation-3">
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
	<div class="col-xl-3 col-md-6 mb-4 mt-5">
		<div class="card  h-100 callout callout-info elevation-3">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text font-weight-bold text-info h5 mb-1">Hari ini</div>
						<div class="h2 mb-0 mt-2 ml-2 font-weight-bold text-gray-800">+ <?= number_format($indo['todayCases']); ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-calendar fa-2x text-gray-400 mr-3"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<!-- Sembuh -->
	<div class="col-xl-4 col-md-6 mb-4">
		<div class="card border-left-success shadow-sm h-100 py-2 callout callout-success elevation-3">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text font-weight-bold text-success h5 mb-1">Sembuh</div>
						<div class="h2 mb-0 mt-2 ml-2 font-weight-bold text-gray-800"><?= number_format($indo['recovered']); ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-calendar fa-2x text-gray-400 mr-3"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Rawat -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-warning shadow-sm h-100 py-2 callout callout-warning elevation-3">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text font-weight-bold text-warning h5 mb-1">Aktif</div>
						<div class="h2 mb-0 mt-2 ml-2 font-weight-bold text-gray-800"><?= number_format($indo['active']); ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-calendar fa-2x text-gray-400 mr-3"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Meninggal -->
	<div class="col-xl-4 col-md-6 mb-4">
		<div class="card border-left-secondary shadow-sm h-100 py-2 callout callout-info elevation-3">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text font-weight-bold text-secondary h5 mb-1">Meninggal <sup class="text font-weight-bold ml-1 text-danger"> +<?= number_format($indo['todayDeaths']); ?></sup></div>
						<div class="h2 mb-0 mt-2 ml-2 font-weight-bold text-gray-800"><?= number_format($indo['deaths']); ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-calendar fa-2x text-gray-400 mr-3"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
