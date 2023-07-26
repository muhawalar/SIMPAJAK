<?php 

class Notifications extends Controller{
    public function index(){
        
        // $id_wajib_pajak = '';
        $data['wajib_pajak_data'] = $this->model('Wajib_pajak_model')->getWajibPajakData();
        $data['lunas'] = $this->model('Wajib_pajak_model')->getWajibPajakDataLunas();
        $data['tertunggak'] = $this->model('Wajib_pajak_model')->getWajibPajakDataTertunggak();
        $data['belum_lunas'] = $this->model('Wajib_pajak_model')->getWajibPajakDataBelumLunas();
        // $data['no_telp'] = $this->model('Wajib_pajak_model')->getNoTelpWajibPajakById($id_wajib_pajak);
        $this->view('templates/header');
        $this->view('templates/sidebar');
        $this->view('notifications/index', $data);
        $this->view('templates/footer');
    }

    public function api(){
        $this->view('notifications/api');
        
    }
}

?>