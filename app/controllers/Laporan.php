<?php 

class Laporan extends Controller{
    public function index(){
        $data['wajib_pajak'] = $this->model('Wajib_pajak_model')->getWajibPajakData();
        $this->view('templates/header');
        $this->view('templates/sidebar');
        $this->view('laporan/index', $data);
        $this->view('templates/footer');
    }
    }
    

?>