<?php
class Cart_model extends CI_Model{
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
 public function getcart(){
         //$ip = 0;
        $ip = $this->ambil_ip_pengunjung();
        $query = "select sum(jumlah) as jumlah from keranjang where ip = '$ip'";
        $result = $this->db->query($query)->row_array();
        $cart = $result['jumlah'];


        $result_cart = 0;

        if ($cart == 0){
            $result_cart = 0;

        }else{
            $result_cart = $cart;
        }
        return $result_cart;
 }


}
?>