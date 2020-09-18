<?php
class Article_Model extends CI_Model
{
  private $_table = "artikel";

  public $kode_artikel;
  public $judul;
  public $gambar;
  public $isi;
  public $tanggal;
 

      public function getDataArtikel($limit, $start){
        $q = "SELECT * FROM `artikel` WHERE kode_artikel > $start and kode_artikel < (select kode_artikel from artikel order by kode_artikel desc limit 1)";
        $query = $this->db->query($q);
        return $query;
      }

        public function getArtikelBaru(){
          $this->db->select("*");
          $this->db->from("artikel");
          $this->db->limit(1);
          $this->db->order_by('tanggal', 'DESC');
          return $this->db->get()->result();
      }

        public function getByIdArtikel($id){
            $this->db->select("*");
            $this->db->from("artikel");
            $this->db->where('kode_artikel', $id);
            return $this->db->get()->row();
        }

  public function rules()
  {
    return[
      [ 'field' => 'judul',
        'label' => 'judul',
        'rules' => 'required'],
      [ 'field' => 'isi',
        'label' => 'isi',
        'rules' => 'required',]
    ];
  }

  function tampil_data_article()
  {
    $this->db->select('kode_artikel,judul,gambar,tanggal');
    $q = $this->db->get('artikel');

    if($q->num_rows() > 0)
    {
      foreach ($q->result() as $row)
      {
        $data[] = $row;
      }
      return $data;
    }
  }

  public function getById($kode_artikel)
    {
        return $this->db->get_where($this->_table, ["kode_artikel" => $kode_artikel])->row();
    }

  function simpan_data_article()
  {
    $this->load->helper('date');
    $datestring = '%Y-%m-%d';
    $time = time();
    $post = $this->input->post();
    $this->kode_artikel = rand(0,100);
    $this->judul = $post["judul"];
    $this->isi = $post["isi"];
    $this->tanggal = mdate($datestring, $time);
    $this->db->insert($this->_table,$this);

  }

  function update_data_article()
  {
    $this->load->helper('date');
    $datestring = '%Y-%m-%d';
    $time = time();
		$post = $this->input->post();
    $this->kode_artikel = $post["kode_artikel"];
    $this->judul = $post["judul"];
    $this->isi = $post["isi"];
    $this->gambar = $post["gambar"];
    $this->tanggal = $time;
    
    if (!empty($_FILES["gambar"]["name"])) {
      $this->gambar = $this->upload_gambar();
      $this->db->set('gambar', $this->gambar['file']['orig_name']);
      
    } else {
      
      $this->db->set('gambar', $post['old_image']);

    }

    $this->db->set('judul',$this->judul);
    $this->db->set('isi',$this->isi);

    $this->db->where('kode_artikel',$post['kode_artikel']);
    $this->db->update('artikel');

  }	
  
  function hapus_data_article($kode_artikel)
  {
    return $this->db->delete($this->_table, array("kode_artikel" => $kode_artikel));
  }

  public function upload_gambar() {
      $config['upload_path'] = 'gambar/';
      $config['allowed_types'] = 'jpg|png|jpeg';
      // $config['max_size']  = '2048';
      $config['remove_space'] = TRUE;
    
      $this->load->library('upload', $config); 
      if($this->upload->do_upload('gambar')){ 
        $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
        return $return;
      }else{
        $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
        return $return;
      }
  }

  public function save_gambar($upload)
  {
    $data = array(
      'judul'=>$this->session->userdata('judul'),
      'isi' => $this->session->userdata('isi'),
      'tanggal' => time(),
      'gambar' => $upload['file']['orig_name'],
    );

    // $this->db->set('gambar', $upload['file']['orig_name']);
    // $this->db->where('kode_unik', $kode);
    // $this->db->update('transaksi');
    
    $this->db->insert('artikel', $data);
  }
}