<?php 

class Notifications extends Controller{
    public function index(){
        $this->view('templates/header');
        $this->view('templates/sidebar');
        $this->view('notifications/index');
        $this->view('templates/footer');
    }
}

?>