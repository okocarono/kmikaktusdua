<section class="container">
  
	<table class="table table-bordered table-hover mt-5">
		<thead class="text-center thead-light">
		<tr id= "main_heading">
		<td width="2%">No</td>
		<td width="33%">Nama Produk</td>
		<td width="17%">Harga Satuan</td>
		<td width="20%">Jumlah Barang</td>
		<td width="20%">Total</td>
		<td width="10%">Hapus</td>
		</tr>
		</thead>
	<tbody>
  
      <?php
      
      $i = 1;
      $total = 0;
     
      foreach($data as $a) :
        $totalsatuan = $a['harga'] * $a['jumlah'];
        $total += $totalsatuan;
      ?>
        <tr>
        <td><?= $i++; ?></td>
        <td><?= $a['nama'] ?></td>
        <td>Rp. <?= $a['harga'] ?></td>
        <td class="text-center"><?= $a['jumlah'] ?></td>
        <td>Rp. <?= $totalsatuan ?></td>
     
        <td><a href="<?php echo base_url('Keranjang/hapus/').$a['kodeproduk']?>" class="btn btn-danger"><i class='fas fa-fw fa-trash'></i></a></td>
        </tr>
      <?php endforeach; ?>
    
		</tbody>
      <tfoot>
      <tr>
      <td colspan="4" class="text-center">Total Pembayaran <span class="badge badge-danger">belum termasuk biaya kirim</span></td>
      <td>Rp. <?= $total; ?></td>
      <td></td>
      </tr>
      <tr>
      <td colspan ="5"></td>
      <td><a href="<?= base_url('Pembelian')?>" class="btn btn-warning">Checkout</a></td>
      </tr>
      </tfoot>
</table>
</section>
