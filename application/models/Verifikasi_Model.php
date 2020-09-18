<?php

    class Verifikasi_Model extends CI_Model {

        public function dapatkanSemuaDataPembeli() {
            $this->db->select('DISTINCT(transaksi.kode_unik), produk.nama_produk, pembeli.nama_pembeli, transaksi.tanggal_beli, transaksi.status, transaksi.gambar, transaksi.tanggal_verifikasi');
            // $this->db->distinct('transaksi.kode_unik');
            $this->db->from('transaksi');
            $this->db->join('produk', 'transaksi.kode_produk = produk.kode_produk');
            $this->db->join('pembeli', 'transaksi.id_pembeli = pembeli.id_pembeli');
            $this->db->where('transaksi.kode_unik != ', "");
            $this->db->group_by('transaksi.kode_unik');
            return $this->db->get()->result_array();
        }

        public function ubahStatusOngkir($data) {
            $this->db->set('status', 'menunggu pembayaran');
            $this->db->set('ongkir', $data['biaya']);
            $this->db->set('tanggal_verifikasi', time());
            $this->db->where('kode_unik', $data['kode']);
            return $this->db->update('transaksi');
        }
        public function tampil($kode){
            $query = "
            select
            DISTINCT 
            produk.kode_produk as kode, 
            transaksi.kode_pesanan as kodepesanan,
            pembeli.id_pembeli as idbeli,
            produk.nama_produk as nama,
            produk.harga_produk as harga, 
            sum(transaksi.jumlah_produk) as jumlah, 
            sum(transaksi.total_harga) as total 
            from 
            transaksi
            join 
            produk
            on 
            transaksi.kode_produk = produk.kode_produk
            join
            pembeli
            on
            transaksi.id_pembeli = pembeli.id_pembeli
            where transaksi.kode_unik = '$kode'
            group by transaksi.kode_produk";
            
            return $this->db->query($query)->result_array();
        
            
        }
        public function dapatkanSatuDataPembeli($kode) {
            $this->db->select('transaksi.kode_unik, pembeli.email, pembeli.no_telp, pembeli.catatan, produk.nama_produk, pembeli.nama_pembeli, transaksi.tanggal_beli, transaksi.ongkir, transaksi.status, pembeli.alamat_lengkap, pembeli.provinsi, pembeli.kabupaten, pembeli.kecamatan, pembeli.kodepos, pembeli.catatan, pembeli.email');
            $this->db->from('transaksi');
            $this->db->join('produk', 'transaksi.kode_produk = produk.kode_produk');
            $this->db->join('pembeli', 'transaksi.id_pembeli = pembeli.id_pembeli');
            $this->db->where('transaksi.kode_unik', $kode);
            return $this->db->get()->row_array();
        }

        public function ubahStatus($kode) {
            $this->db->set('status', 'terkonfirmasi');
            $this->db->set('tanggal_verifikasi', time());
            $this->db->where('kode_unik', $kode);
            $this->db->where('gambar !=', NULL); //validasi ini berhasil karena ada affected rows
            $this->db->update('transaksi');
            return $this->db->affected_rows();
        }

    }