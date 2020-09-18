<?php
class Menunggu_Model extends CI_Model
{
    function Model_Menunggu($menunggu)
    {
            $this->db->select("*");
            $this->db->from("pembeli");
            $this->db->where('id_pembeli', $menunggu);
            return $this->db->get()->row();
    }
}

?>