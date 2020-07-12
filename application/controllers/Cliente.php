<?php 

class Cliente extends CI_Controller {

    public function lista() {
        $this->load->view('common/header.php');
        $this->load->view('exemplo/navbar');

        $this->load->model('ClienteModel', 'model'); //ClienteModel-- classe definida na pasta model 
        $data['tabela'] = $this->model->gera_tabela(); //model -- tem que ser o mesmo nome definido acima
        $this->load->view('common/table.php',$data);
        $this->load->view('exemplo/rodape');
        $this->load->view('common/footer.php');
    }

    public function detalhe($id){
        $this->load->view('common/header.php');
        $this->load->view('exemplo/navbar');

        $this->load->model('ClienteModel', 'model');
        $v['cliente'] = $this->model->detalhe($id);
        $this->load->view('cliente/detalhe',$v);
        $this->load->view('exemplo/rodape');
        $this->load->view('common/footer.php');
    }
    public function cadastro(){
        $this->load->view('common/header.php');
        $this->load->view('exemplo/navbar');

        $this->load->model('ClienteModel','model'); //model é o apelido de ClienteModel
        $this->model->salva_usuario();

        $this->load->view('cliente/form_clien');

        $this->load->view('exemplo/rodape');
        $this->load->view('common/footer.php');
    }
        public function editar($id){
        $this->load->view('common/header.php');
        $this->load->view('exemplo/navbar');

        //carregar os dados
        $this->load->model('ClienteModel','model');
        $data['user'] = $this->model->read($id); //exibe o id 5

        //exibir na pagina
        $this->load->view('cliente/form_clien', $data);

        //modificar e salvar
        $this->model->edita_usuario($id);

        $this->load->view('exemplo/rodape');
        $this->load->view('common/footer.php');
    }

    public function deletar($id) {
        $this->load->model('ClienteModel','model');
        $this->model->deletar($id);
        redirect('cliente/lista');
    }

}