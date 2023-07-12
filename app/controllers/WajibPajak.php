<?php 

class WajibPajak extends Controller{
    public function index(){
        $this->view('templates/header');
        $this->view('templates/sidebar');
        $this->view('wajib_pajak/index');
        $this->view('templates/footer');
    }
}

?>