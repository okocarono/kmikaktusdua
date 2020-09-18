<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Keranjang_Model extends CI_Model {

    public function get_produk_all()
    {
        $query = $this->db->get('produk');
        return $query->result_array();
    }
 
    public function get_produk_kategori($kategori)
    {
        if($kategori>0)
            {
                $this->db->where('jenis_produk',$kategori);
            }
        $query = $this->db->get('produk');
        return $query->result_array();
    }
 
    public function get_kategori_all()
    {
        $query = $this->db->get('produk');
        return $query->result_array();
    }
    
    function ambil_ip_pengunjung() {
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $ip = $_SERVER['REMOTE_ADDR'];
            }
            return $ip;
    }
			
	
    public function addToCart($kode,$jumlah){
       
      if($jumlah == NULL){
                $jumlah =1;
                $cart =["ip" => $this->ambil_ip_pengunjung(),"kode_produk" => $kode,"jumlah" => $jumlah];
                return $this->db->insert('keranjang',$cart);
            }else{
                $cart =["ip" => $this->ambil_ip_pengunjung(),"kode_produk" => $kode,"jumlah" => $jumlah];
                return $this->db->insert('keranjang',$cart);
            }
        
        
    }
    public function tampil($kode = 0){
        $ip = $this->ambil_ip_pengunjung();
        $query = "
            select
                DISTINCT 
                keranjang.id as kode, 
                keranjang.kode_produk as kodeproduk,
                produk.nama_produk as nama,
                produk.harga_produk as harga, 
                sum(keranjang.jumlah) as jumlah, 
                sum(produk.harga_produk) as total 
            from 
            produk 
            join 
            keranjang 
            on 
            produk.kode_produk = keranjang.kode_produk 
            WHERE keranjang.ip =  '$ip'
            group by produk.kode_produk";
        
        return $this->db->query($query)->result_array();
    
        
    }

    public function hapus($kode){
        return $this->db->delete('keranjang',['kode_produk' =>$kode]);
    }
    public function hapusemua(){
        $ip = $this->ambil_ip_pengunjung();
        $sql= $this->db->query("delete from keranjang where ip ='$ip'");
        return $sql;
    }

 
}
?>