<div class="row">
	<div class="container-fluid mt-5">
		<div class="row">
			<div class=" col-12">
				<div class="card elevation-3">
					<div class="card-header bg-danger">
						<div class="d-sm-flex align-items-center justify-content-between">
							<h3 class="card-title">
								<?= $tb . $data;	 ?>
							</h3>
							<h6 class="mb-0 text-gray-800 float-right"><?= tanggal('l, d M Y') ?></h6>
						</div>
					</div>
					<div class="card-body table-responsive p-0" style="height: 523px;">
						<table class="table table-head-fixed table-hover table-sm table-bordered text-nowrap">
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
		</div>
	</div>
</div>
