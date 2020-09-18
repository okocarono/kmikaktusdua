<?php
class Counter_Model extends CI_Model
{
	private $_table="tbcounter";

    function Model_Counter()
    {
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
			
		$counter = array(
			'ip' => ambil_ip_pengunjung(),
			'date' => date("Y-m-d"),
			'hits' => '1'
		);
			
		$this->db->where('ip', $counter['ip']);
        $this->db->where('date', $counter['date']);
        $query = $this->db->get($this->_table, FALSE);
		
		
      	$cek = $query->num_rows();
        
		if($cek > 0){
			$hits = $query->row()->hits;
			$hits++;
			
			$data = array(
            'ip' => $counter['ip'],
            'date' => $counter['date'],
            'hits' => $hits
			);
			
			$this->db->where('ip', $counter['ip']);
			$this->db->where('date', $counter['date']);
			$this->db->update($this->_table,$data);
			
		}else{
			$data = array(
            'ip' => $counter['ip'],
            'date' => $counter['date'],
			'hits' => '1'
			);
			
			$this->db->insert($this->_table, $data);
		}
    }
}