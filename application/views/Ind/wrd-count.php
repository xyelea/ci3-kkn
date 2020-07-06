<br>
<div class="container-fluid mt-5">

	<div class="card elevation-3">
		<div class="card-header bg-danger">
			<div class="d-sm-flex align-items-center justify-content-between">
				<h3 class="card-title">
					<?= $tb . $data;	 ?>
				</h3>
				<h6 class="mb-0 text-gray-800"><?= date('l, d M Y') ?></h6>
			</div>
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
				foreach ($negara as $n) :
				?>
					<tbody>
						<tr>
							<td class="text-center"><?= $i; ?></td>
							<td><?= $n['attributes']['Country_Region']; ?></td>
							<td class="text-center"><?= number_format($n['attributes']['Confirmed']); ?></td>
							<td class="text-center"><?= number_format($n['attributes']['Recovered']); ?></td>
							<td class="text-center"><?= number_format($n['attributes']['Deaths']); ?></td>
						</tr>
					</tbody>
				<?php $i++;
				endforeach; ?>
			</table>
		</div>
	</div>
</div>
