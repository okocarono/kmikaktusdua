<div class="container my-4">

	<div class="row">

		<div class="col-lg-8 col-md-12 col-sm-12">
			<div class="accordion" id="accordionExample">

				<div class="card">
					<div class="card-header collapsed" type="button" id="headingOne" data-toggle="collapse"
						data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						<h2 class="mb-0">
							<div class="btn collapsed" style="color: teal; font-weight: bold;">
								<i class="fas fa-user-check"></i>&nbsp Detail Pembeli
							</div>
						</h2>
					</div>

					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
						data-parent="#accordionExample">
						<div class="card-body">
							<table class="table table-borderless">
								<tbody>
									<tr>
										<td>Nama</td>
										<td>:</td>
										<td><?= $ongkir->nama_pembeli?></td>
									</tr>
									<tr>
										<td>Email</td>
										<td>:</td>
										<td><?= $ongkir->email?></td>
									</tr>
									<tr>
										<td>Nomor</td>
										<td>:</td>
										<td><?= $ongkir->no_telp ?></td>
									</tr>
									<tr>
										<td>Keterangan Tambahan</td>
										<td>:</td>
										<td><?= $ongkir->catatan ?></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header collapsed" type="button" id="headingTwo" data-toggle="collapse"
						data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						<h2 class="mb-0">
							<div class="btn collapsed" style="color: teal; font-weight: bold;">
								<i class="fas fa-shopping-cart"></i>&nbsp Detail Barang Pesanan
							</div>
						</h2>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr class="text-center">
											<th scope="col">No</th>
											<th scope="col">Nama Produk</th>
											<th scope="col">Harga Satuan</th>
											<th scope="col">Jumlah Barang</th>
											<th scope="col">Total</th>
										</tr>
									</thead>
									<tbody>
									<?php
      
										$i = 1;
										$total = 0;
										
										foreach($tampil as $a) :
											$totalsatuan = $a['harga'] * $a['jumlah'];
											$total += $totalsatuan;
										?>
										<tr>
											<td><?= $i++; ?></td>
											<td><?= $a['nama'] ?></td>
											<td>Rp. <?= $a['harga'] ?></td>
											<td class="text-center"><?= $a['jumlah'] ?></td>
											<td>Rp. <?= $totalsatuan ?></td>
										</tr>
										<?php endforeach; ?>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="4" class="text-center">Total Pembayaran <span
													class="badge badge-danger">belum termasuk biaya kirim</span></td>
											<td>Rp. <?= $total; ?></td>

										</tr>

									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header collapsed" type="button" id="headingThree" data-toggle="collapse"
						data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						<h2 class="mb-0">
							<div class="btn collapsed" style="color: teal; font-weight: bold;">
								<i class="fas fa-map-marker-alt"></i>&nbsp Detail Alamat
							</div>
						</h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
						data-parent="#accordionExample">
						<div class="card-body">
							<table class="table table-borderless">
								<tbody>
									<tr>
										<td>Alamat Lengkap</td>
										<td>:</td>
										<td><?= $ongkir->alamat_lengkap?></td>
									</tr>
									<tr>
										<td>Kecamatan</td>
										<td>:</td>
										<td><?= $ongkir->kecamatan?></td>
									</tr>
									<tr>
										<td>Kabupaten</td>
										<td>:</td>
										<td><?= $ongkir->kabupaten ?></td>
									</tr>
									<tr>
										<td>Provinsi</td>
										<td>:</td>
										<td><?= $ongkir->provinsi?></td>
									</tr>
									<tr>
										<td>Kode Pos</td>
										<td>:</td>
										<td><?= $ongkir->kodepos?></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-12 col-sm-12">
			<div class="row">

				<div class="col-12 mt-2">
					<div class="card text-center bg-success" style="color: white;">
						<div class="card-body">
							<h5 class="card-title">Menunggu Ongkir</h5>
							<hr>
							<p>Kode Pesanan : <span class="font-weight-bold" style="color: yellow;"><?= $ongkir->kode_unik ?></span></p>
							<p class="text-danger font-weight-bold">Simpan kode unik diatas untuk konfirmasi pesanan.</p>
							<hr>
							<p class="card-text">Menunggu Penjual untuk Menambahkan Biaya Pengiriman Barang</p>
							<a href="http://www.jet.co.id/tariff" class="btn btn-block btn-warning" target="_blank">Cek
								Estimasi Biaya Kirim</a>
						</div>
					</div>
				</div>

				<div class="col-12 my-3">
					<div class="card text-center">
						<div class="card-body">
							<h5 class="card-title">Menunggu Pembayaran</h5>
							<hr>
							<!-- <p class="card-text">With supporting text below as a natural lead-in to additional content. -->
							</p>
						</div>
					</div>
				</div>

				<div class="col-12">
					<div class="card text-center">
						<div class="card-body">
							<h5 class="card-title">Pembayaran Terkonfirmasi</h5>
							<hr>
							<!-- <p class="card-text">With supporting text below as a natural lead-in to additional content. -->
							</p>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>


</div>

<div class="container mt-4">

</div>
