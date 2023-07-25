<?php 

class WajibPajak extends Controller{
    public function index(){
        $this->view('templates/header');
        $this->view('templates/sidebar');
        $this->view('wajib_pajak/index');
        $this->view('templates/footer');
    }

    public function submitWajibPajak(){
        $nama_wajib_pajak = $_POST['nama_wajib_pajak'];
        $npwp = $_POST['npwp'];
        $jenis_usaha = $_POST['jenis_pajak'];
        $mulai_periode = $_POST['mulai_periode'];
        $terakhir_periode = $_POST['berakhir_periode'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        $status_pajak = $_POST['status'];
        $time = time();
        $updated_at = date("Y-m-d",$time);

        echo $nama_wajib_pajak;
        echo $npwp;
        echo $jenis_usaha;
        echo $mulai_periode;
        echo $terakhir_periode;
        echo $alamat;
        echo $no_telp;
        echo $status_pajak;
        echo $updated_at;

        $this->model('Wajib_pajak_model')->addWajibPajak($nama_wajib_pajak, $npwp, $jenis_usaha, $mulai_periode, $terakhir_periode, $alamat, $no_telp, $status_pajak, $updated_at);
        header("Location:".BASEURL."/WajibPajak/index");


    }

}

?>