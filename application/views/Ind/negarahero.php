<br>
<div class="container-fluid mt-5">

	<div class="card elevation-3">
		<div class="card-header bg-danger">
			<div class="d-sm-flex align-items-center justify-content-between">
				<h3 class="card-title">
					<?= $tb . $data;	 ?>
				</h3>
				<h6 class="mb-0 text-gray-800"><?= tanggal('l, d M Y') ?></h6>
			</div>
		</div>
		<div class="card-body">
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr class="text-center">
						<th>No</th>
						<th>Negara</th>
						<th>Positif</th>
						<th>Sembuh</th>
						<th>Meninggal</th>
						<th>Total Tes</th>
					</tr>
				</thead>
				<?php
				$i = 1;
				foreach ($negara as $n) :
				?>

					<tbody>
						<tr>
							<td class="text-center"><?= $i; ?></td>
							<td><?= $n['country']; ?></td>
							<td class="text-center"><?= number_format($n['cases']); ?></td>
							<td class="text-center"><?= number_format($n['recovered']); ?></td>
							<td class="text-center"><?= number_format($n['deaths']); ?></td>
							<td class="text-center"><?= number_format($n['totalTests']); ?></td>
						</tr>
					</tbody>

				<?php $i++;
				endforeach; ?>
			</table>
		</div>
	</div>
</div>
