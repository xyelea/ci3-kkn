<!-- Main Content -->

<!-- End of Topbar -->

<!-- Begin Page Content -->
<!-- <div class="container-fluid margin-top2 px-5">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="d-sm-flex align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Data <?= $data; ?></h6>
				<h6 class="mb-0 text-gray-800"><?= date('l, d M Y') ?></h6>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="text-center">
							<th>No</th>
							<th>Provinsi</th>
							<th>Positif</th>
							<th>Sembuh</th>
							<th>Meninggal</th>
						</tr>
					</thead>

					<?php
					$i = 1;
					foreach ($provinsi as $p) :
					?>

						<tbody>
							<tr>
								<td class="text-center"><?= $i; ?></td>
								<td><?= $p['attributes']['Provinsi']; ?></td>
								<td class="text-center"><?= number_format($p['attributes']['Kasus_Posi']); ?></td>
								<td class="text-center"><?= number_format($p['attributes']['Kasus_Semb']); ?></td>
								<td class="text-center"><?= number_format($p['attributes']['Kasus_Meni']); ?></td>
							</tr>
						</tbody>

					<?php $i++;
					endforeach; ?>
					<tfoot>
						<tr class="text-center">
							<th>No</th>
							<th>Provinsi</th>
							<th>Positif</th>
							<th>Sembuh</th>
							<th>Meninggal</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>

</div> -->
<!-- /.container-fluid -->


<!-- End of Main Content --><br>
<div class="container-fluid mt-5">


	<div class="card elevation-3">
		<div class="card-header bg-danger">
			<h3 class="card-title">
				<?= $tb . $data;	 ?>
			</h3>
		</div>
		<div class="card-body">
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr class="text-center">
						<th>No</th>
						<th>Provinsi</th>
						<th>Positif</th>
						<th>Sembuh</th>
						<th>Meninggal</th>
					</tr>
				</thead>
				<?php
				$i = 1;
				foreach ($provinsi as $p) :
				?>
					<tbody>
						<tr>
							<td class="text-center"><?= $i; ?></td>
							<td><?= $p['attributes']['Provinsi']; ?></td>
							<td class="text-center"><?= number_format($p['attributes']['Kasus_Posi']); ?></td>
							<td class="text-center"><?= number_format($p['attributes']['Kasus_Semb']); ?></td>
							<td class="text-center"><?= number_format($p['attributes']['Kasus_Meni']); ?></td>
						</tr>
					</tbody>
				<?php $i++;
				endforeach; ?>
			</table>
		</div>
	</div>
</div>
