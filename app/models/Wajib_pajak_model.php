<?php 
class Wajib_pajak_model{
    private $table = 'trx_wajib_pajak';
    private $db;
    
    public function __construct(){
        $this->db = new Database;
        
    }

    public function addWajibPajak($nama_wajib_pajak, $npwp, $jenis_usaha, $mulai_periode, $berakhir_periode, $alamat, $no_telp, $status, $updated_at){
        $id_wajib_pajak = '';

        $query = "INSERT INTO " . $this->table . " VALUES (:id_wajib_pajak, :nama_wajib_pajak, :npwp, :id_jenis_usaha, :mulai_periode, :berakhir_periode, :alamat, :no_telp, :status, :update_at)";
        $this->db->query($query);
        $this->db->bind('id_wajib_pajak', $id_wajib_pajak);
        $this->db->bind('nama_wajib_pajak', $nama_wajib_pajak);
        $this->db->bind('npwp', $npwp);
        $this->db->bind('id_jenis_usaha', $jenis_usaha);
        $this->db->bind('mulai_periode', $mulai_periode);
        $this->db->bind('berakhir_periode', $berakhir_periode);
        $this->db->bind('alamat', $alamat);
        $this->db->bind('no_telp', $no_telp);
        $this->db->bind('status', $status);
        $this->db->bind('update_at', $updated_at);
        $this->db->execute();
    }
}

?>