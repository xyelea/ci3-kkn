<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid bg-danger">
	<div class="container container-fluid">
		<div class="d-lg-flex align-items-center justify-content-between pl-lg-5 ">
			<h1 class="font-weight-light mt-5">Cucilah Tangan anda Sehabis Keluar Rumah</h1>
			<img src="<?= base_url('assets'); ?>/img/5.svg" alt="Gambar Orang mencuci tangan" srcset="" style="max-width: 100%;">
		</div>

	</div>
</div>

<div class="row">
	<div class="col-md-12 text-gray-800">
		<div class="text-center text-uppercase font-weight-bolder">
			<h1>DATA PERSEBARAN COVID-19 <?= $data; ?></h1>
		</div>
		<div class="text-center text-uppercase font-weight-bolder">*Data Bersumber dari Jhon Hopkins University,&nbsp; Akan ada Perbedaan Antar data Akibat Jadwal Update API yang berbeda.</div>
	</div>
</div>


<div class="row">
	<div class="col-sm-3 mt-3">
		<h1 class=""><?= tanggal() ?></h1>
	</div>
	<div class="col-sm-4 ml-auto mt-3 btn-group">
		<a href="<?= base_url('data/indonesia') ?>">
			<button type="button" class="btn btn-block btn-danger btn-lg mt-3"><i class="fas fa-globe-asia"></i> ID</button>
		</a>&nbsp;
		<a href="<?= base_url('data/peta') ?>">
			<button type="button" class="btn btn-block btn-danger  btn-lg mt-3"><i class="fas fa-map"></i> Peta Persebaran</button>
		</a>&nbsp;
		<a href="<?= base_url('data/negara') ?>">
			<button type="button" class="btn btn-block btn-danger btn-lg mt-3"><i class="fas fa-table"></i> Negara</button>
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
						<div class="h2 mb-0 mt-2 ml-2 font-weight-bold text-gray-800"><?= number_format($world[0]['cases']); ?></div>
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
						<div class="h2 mb-0 mt-2 ml-2 font-weight-bold text-gray-800">+ <?= number_format($world[0]['todayCases']); ?></div>
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
		<div class="card h-100 py-2 callout callout-success elevation-3">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text font-weight-bold text-success h5 mb-1">Sembuh</div>
						<div class="h2 mb-0 mt-2 ml-2 font-weight-bold text-gray-800"><?= number_format($world[0]['recovered']); ?></div>
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
		<div class="card h-100 py-2 callout callout-warning elevation-3">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text font-weight-bold text-warning h5 mb-1">Aktif</div>
						<div class="h2 mb-0 mt-2 ml-2 font-weight-bold text-gray-800"><?= number_format($world[0]['active']); ?></div>
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
		<div class="card h-100 py-2 callout callout-info elevation-3">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text font-weight-bold text-secondary h5 mb-1">Meninggal <sup class="text font-weight-bold ml-1 text-danger"> +<?= number_format($world[0]['todayDeaths']); ?></sup></div>
						<div class="h2 mb-0 mt-2 ml-2 font-weight-bold text-gray-800"><?= number_format($world[0]['deaths']); ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-calendar fa-2x text-gray-400 mr-3"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
