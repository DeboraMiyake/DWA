<?php
    include_once APPPATH. 'libraries/Pessoa.php';
    include_once APPPATH. 'libraries/component/Table.php';

    class ClienteModel extends CI_Model {

        public function gera_tabela() {
            /*$html = '';  contador*/

            $pessoa = new Pessoa(); //new cria objetos de uma classe
            $data = $pessoa->lista();
            $label = ['N°', 'Nome', 'Sobrenome', 'Idade', 'Sexo'];
            $table = new table($data, $label);

            //Configurações da tabela
            $table->addHeaderClass('red-text'); //usa a tabela ja definida mas com uma classe para mudar a cor em cada pagina diferente
            $table->useZebra(); //definido em component/table.php
            $table->useActionButton();
            $table->useborder();
            $table->useHover();
            $table->smallRow();


            return $table->getHTML();

            /*foreach ($data as $cliente) {  //executa o laço

                $html .= '<tr>';
                $html .= '<td>'.$cliente['id'].'</td>';
                $html .= '<td><a href="'.base_url('cliente/detalhe/'.$cliente['id']).'">'.$cliente['nome'].'</a></td>';
                $html .= '<td>'.$cliente['sobrenome'].'</td>';
                $html .= '<td>'.$cliente['idade'].'</td>';
                $html .= '<td>'.$cliente['sexo'].'</td>';
                $html .= '<td>'.$this->action_buttons($cliente['id']).'</td>';
                $html .= '</tr>';

            } 
            return $html;*/
        }


       public function detalhe($id) {
            $costumer = new Costumer();
            $cliente = $costumer->lista();
            return $cliente[$id - 1]; //para não ter 0
       }
        public function salva_usuario() {
            if (sizeof($_POST) == 0) return;

            //definir as regras de vaidação
            $this->form_validation->set_rules('nome', 'Nome do cliente', 'trim|required|min_length[2]|max_length[20]'); //trim tira os espaços
            $this->form_validation->set_rules('sobrenome', 'Sobrenome do cliente', 'trim|required|min_length[3]|max_length[60]'); //required obrigatório
            $this->form_validation->set_rules('idade', 'Idade do cliente', 'trim|required|is_natural|greater_than[17]|less_than[120]'); //17 > idade < 120
            $this->form_validation->set_rules('sexo', 'Gênero do cliente', 'trim|required|in_list[Feminino, Masculino]'); //in list valores pré definidos

            //realizar a vaidação
            if($this->form_validation->run()){
                //passou na validação
                //executar a ação do formulário
                $data = $this->input->post();
                $pessoa = new Pessoa();
                $pessoa->cria_usuario($data);
                redirect('Cliente/lista'); //redireciona o usuario apos enviar os dados
            }          
         
        }

        public function edita_usuario($id) {
            if (sizeof($_POST) == 0) return;
            $data = $this->input->post();

            $pessoa = new Pessoa();
            $pessoa->edita_usuario($data, $id);
            redirect('Cliente/lista'); 
        }

        public function read($id) {
            $pessoa = new pessoa();
            return $pessoa->user_data($id);
        }

        public function deletar($id) {
            $pessoa = new pessoa();
            $pessoa->delete($id);
        }

    }

?>