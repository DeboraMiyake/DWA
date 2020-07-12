<?php

defined('BASEPATH') OR exit('No direct script acesss allowed');


class Exemplo extends CI_Controller{

     public function index(){
         $this->load->view('common/header');
         $this->load->view('exemplo/navbar');
         $this->load->view('exemplo/jumbotron');
         $this->load->view('exemplo/linha1');
         $this->load->view('exemplo/linha2');
         $this->load->view('exemplo/linha3');
		 $this->load->view('exemplo/pagination');
		 $this->load->view('exemplo/rodape');
         $this->load->view('common/footer');
     
  }
     public function basico(){
         $this->load->view('common/header');
         $this->load->view('exemplo/navbar');
         $this->load->view('common/footer');
     
  }
  
}