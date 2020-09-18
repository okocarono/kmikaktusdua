<section class="container my-4">
 <h3 class="text-center" style="color: teal;">Halaman Admin Pemesanan</h3>
 <div class="text-center">
    <?= $this->session->flashdata('pesan'); ?>
 </div>
</section>
<section>
    <div class="container mt-5">
    <div class="table-responsive">
    <table class="table  table-hover">
    <thead class="thead-light">
        <tr>
        <th scope="col">Kode Pesanan</th>
        <th scope="col">Pemesan</th>
        <th scope="col">Tanggal Pesan</th>
        <th scope="col">Tanggal Verifikasi</th>
        <th scope="col">Bukti Pembayaran</th>
        <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($pembeli as $pembelot): ?>
       <tr>
            <th scope="row">
                <a href="<?php echo base_url('adminpage/verifikasi/ongkir_verification/').$pembelot['kode_unik']; ?>" >
                    <?= $pembelot['kode_unik']; ?>
                </a>
            </th>
            <td>
                <?= $pembelot['nama_pembeli']; ?>
            </td>
            <td>
                <?= date('d M Y', $pembelot['tanggal_beli']); ?>
            </td>
            <td>
                <?= date('d M Y', $pembelot['tanggal_verifikasi']); ?>
            </td>
            <td>
                <?php
                    if($pembelot['gambar'] == NULL) {
                        echo "Belum";
                    } else {
                        ?>
                            <a href='<?= base_url().'bukti_pembayaran/'.$pembelot['gambar']; ?>' target='_blank'>Sudah</a>
                        <?php
                    }
                ?>
            </td>
            <td>
                <?= $pembelot['status']; ?>
            </td>
        </tr>
    <?php endforeach; ?>
        
    </tbody>
    </table>
    </div>
    </div>
</section>