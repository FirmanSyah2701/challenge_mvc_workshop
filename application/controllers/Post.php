<?php
    class Post extends CI_Controller{
        public function show(){
            return "Ini controller Post";
        }
        function index(){
            $this->load->model('coba_model');
            $data['semua_artikel'] = $this->coba_model->getSemuaData();
            $this->load->view('tampilan_semua_artikel', $data);
        }

        function lihat($id){
            $this->load->model('coba_model');
            $data['artikel'] = $this->coba_model->getDataId($id);
            $this->load->view('tampilan_satu_artikel', $data);
        }
    }