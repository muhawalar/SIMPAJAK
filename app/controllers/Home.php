<?php 

class Home extends Controller{
    public function index(){
        session_start();
        if (!isset($_SESSION['username'])) {
            header("Location:". BASEURL ."/Login");
        }
        else{
            // $data['asisten'] = $this->model('Asisten_model')->getAsisten($_SESSION['id_user']);
            
            $this->view('templates/header');
            $this->view('templates/sidebar');
            $this->view('home/index');
            $this->view('templates/footer');
        }

    }
    
}

?>