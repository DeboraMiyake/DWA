<?php

class Paisagem extends CI_Controller{ 

public function index(){
    $this->load->view('common/header');
    $this->load->view('exemplo/navbar');

    $this->load->view('paisagem/imagem');

    $this->load->view('exemplo/rodape');
    $this->load->view('common/footer');

}
public function config(){
    $this->load->helper('file');
    $this->load->view('common/header');
    /*$this->load->view('exemplo/navbar');*/

    $this->load->model('PaisagemModel', 'paisagem');
    $data['imagens'] = $this->paisagem->salva();
    $info['thumbnails'] = $this->paisagem->lista();


    $this->load->view('paisagem/form', $data);
    $this->load->view('paisagem/display', $info);

    $this->load->view('exemplo/rodape');
    $this->load->view('common/footer');
}
}