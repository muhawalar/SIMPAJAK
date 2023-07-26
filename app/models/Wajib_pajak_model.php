<?php 
class Wajib_pajak_model{
    private $table = 'trx_wajib_pajak';
    private $db;
    
    public function __construct(){
        $this->db = new Database;
        
    }

    public function addWajibPajak($nama_wajib_pajak, $npwp, $jenis_usaha, $mulai_periode, $berakhir_periode, $alamat, $no_telp, $status, $updated_at){
        $id_wajib_pajak = '';
        $formatted_no_telp = "+62$no_telp";

        $query = "INSERT INTO " . $this->table . " VALUES (:id_wajib_pajak, :nama_wajib_pajak, :npwp, :id_jenis_usaha, :mulai_periode, :berakhir_periode, :alamat, :no_telp, :status, :update_at)";
        $this->db->query($query);
        $this->db->bind('id_wajib_pajak', $id_wajib_pajak);
        $this->db->bind('nama_wajib_pajak', $nama_wajib_pajak);
        $this->db->bind('npwp', $npwp);
        $this->db->bind('id_jenis_usaha', $jenis_usaha);
        $this->db->bind('mulai_periode', $mulai_periode);
        $this->db->bind('berakhir_periode', $berakhir_periode);
        $this->db->bind('alamat', $alamat);
        $this->db->bind('no_telp', $formatted_no_telp);
        $this->db->bind('status', $status);
        $this->db->bind('update_at', $updated_at);
        $this->db->execute();
    }

    public function getWajibPajakData(){
        $this->db->query('SELECT id_wajib_pajak, nama_wajib_pajak, npwp, (SELECT nama_jenis_usaha FROM mst_jenis_pajak WHERE trx_wajib_pajak.id_jenis_usaha = mst_jenis_pajak.id_jenis_usaha) 
        as jenis_pajak, mulai_periode, berakhir_periode, alamat, no_telp, (SELECT nama_status FROM mst_status WHERE trx_wajib_pajak.id_status = mst_status.id_status) 
        as status, update_at FROM trx_wajib_pajak');
        return $this->db->resultSet();
    }   

    

    public function getWajibPajakDataLunas(){
        $this->db->query('SELECT no_telp, id_status FROM trx_wajib_pajak WHERE id_status = 3001');
        return $this->db->resultSet();
    }

    public function getWajibPajakDataTertunggak(){
        $this->db->query('SELECT no_telp, id_status FROM trx_wajib_pajak WHERE id_status = 3002');
        return $this->db->resultSet();
    }

    public function getWajibPajakDataBelumLunas(){
        $this->db->query('SELECT no_telp, id_status FROM trx_wajib_pajak WHERE id_status = 3003');
        return $this->db->resultSet();
    }

    public function getNoTelpWajibPajakById($id_wajib_pajak){
        $this->db->query('SELECT no_telp FROM ' . $this->table . ' WHERE id_wajib_pajak=:id_wajib_pajak');
        $this->db->bind(':id_wajb_pajak', $id_wajib_pajak);
        return $this->db->single();
    }
    
    
    }   


?>