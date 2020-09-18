<?php
class Produk_Model extends CI_Model
{  
  private $_table = "produk";
  public $kode_produk;
  public $nama_produk;
  public $gambar;
  public $harga_produk;
  public $stok_produk;
  public $diameter;
  public $tinggi;
  public $bobot;
  public $jenis_produk;
 
  public function rules()
  {
    return[
      [ 'field' => 'nama_produk',
        'label' => 'nama_produk',
        'rules' => 'required'],
      [ 'field' => 'harga_produk',
        'label' => 'harga_produk',
        'rules' => 'required']
    ];
  }

  public function getDataProduk($limit, $start){
    $query = $this->db->get('produk', $limit, $start);
    return $query;
}
  public function getIdDataProduk($kode_produk){
    return $this->db->get_where($this->_table, ["kode_produk" => $kode_produk])->row();
}

  public function getProdukKeyword($keyword){
    $this->db->select("*");
    $this->db->from("produk");
    $this->db->like("nama_produk", $keyword);
    return $this->db->get();
  }
  function simpan_data_produk()
  {

    $post = $this->input->post();
    $this->kode_produk = rand(0,100);
    $this->nama_produk = $post["nama_produk"];
    $this->harga_produk = $post["harga_produk"];
    $this->stok_produk = $post["stok_produk"];
    $this->diameter = $post["diameter"];
    $this->tinggi = $post["tinggi"];
    $this->bobot = $post["bobot"];
    $this->gambar = $this->_uploadImage();

    $this->db->insert($this->_table,$this);
  }

  function update_data_produk($data)
  {
    
    if (!empty($_FILES["gambar"]["name"])) {
      $this->gambar = $this->upload_gambar_produk();
      $this->db->set('gambar', $this->gambar['file']['orig_name']);
    } else {
    }
    $this->db->set('nama_produk', $data['nama_produk']);
    $this->db->set('harga_produk', $data['harga_produk']);
    $this->db->set('stok_produk', $data['stok_produk']);
    $this->db->set('diameter', $data['diameter']);
    $this->db->set('tinggi', $data['tinggi']);
    $this->db->set('jenis_produk', $data['jenis_produk']);
    $this->db->set('catatan', $data['catatan']);
    
    $this->db->where('kode_produk',$data['kode_produk']);
    $this->db->update('produk');
  }	

  function hapus_data_produk($kode_produk)
  {
    return $this->db->delete($this->_table, array("kode_produk" => $kode_produk));
  }
  
  public function upload_gambar_produk() {
    $config['upload_path'] = 'gambar/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']      = 2048; // maksimal ukuran
    $config['remove_space'] = TRUE;
  
    $this->load->library('upload'); 
    $this->upload->initialize($config);
    if($this->upload->do_upload('gambar')){ 
    
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
}

public function save_produk($upload)
{
  $this->db->select("kode_produk");
  $this->db->from('produk');
  $this->db->order_by('tanggal', "DESC");
  $id = $this->db->get()->row();
  $kode_produk = (int)substr($id->kode_produk, 2);
  // var_dump($kode_produk);
  // die;
  $kode_produk += 1;
  $kodeProduk = "KK0" . $kode_produk;
  
  $data = array(
    'kode_produk'=>$kodeProduk,
    'nama_produk'=>$this->session->userdata('nama_produk'),
    'harga_produk' => $this->session->userdata('harga_produk'),
    'stok_produk' => $this->session->userdata('stok_produk'),
    'diameter'=>$this->session->userdata('diameter'),
    'tinggi' => $this->session->userdata('tinggi'),
    'jenis_produk' => $this->session->userdata('jenis_produk'),
    'catatan' => $this->session->userdata('catatan'),
    'gambar' => $upload['file']['orig_name']
  );
  
  $this->db->insert('produk', $data);
}
}