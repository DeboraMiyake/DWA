<?php
class Heroi extends CI_Controller {

    public function index(){
        //lista de herois
    }
    public function register(){
        //form de cadastro
        $this->load->view('common/header');
        $this->load->view('exemplo/navbar');
        $this->load->model('HeroModel', 'hero'); //hero = apelido
        $this->hero->salva();

       // print_r($_POST); para testar se está tudo certo ctrl u para visualizar
        
        $data['conteudo'] = $this->load->view('hero/data', null, true);
        $data['conteudo'] .= $this->load->view('hero/power', null, true);
        $this->load->view('hero/form', $data);

        $this->load->view('exemplo/rodape');
        $this->load->view('common/footer');
    }
    public function edit(){ 
        //form de edição
    }
    
    public function delete($id) {
        //remove o heroo
    }

    //Atividade Crie a visualização do metodo detais
    
    public function details($id){
            $this->load->model('HeroModel', 'model');
            $v = $this->model->get_data($id);

            //aqui vai o codigo para exibição dos dados
            print_r($v);

   }
}