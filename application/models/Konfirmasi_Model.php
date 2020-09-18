<?php

    class Konfirmasi_Model extends CI_Model {

        public function getStatus($data) {
            $this->db->select("*");
            $this->db->from("pembeli");
            $this->db->join("transaksi", "pembeli.id_pembeli = transaksi.id_pembeli");
            $this->db->where('pembeli.no_telp', $data['nomor']);
            $this->db->where('transaksi.kode_unik', $data['kode']);
            return $this->db->get()->row();
        }
    
    }