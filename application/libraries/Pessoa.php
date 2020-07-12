<?php
    include_once APPPATH. 'libraries/util/CI_Object.php';
    //APP -  APLICATIVO E PATH - CAMINHO   endereço base para criação das libs

    class Pessoa extends CI_Object {
    
    private $data = array(
        //valores definidos no proprio array
        array('nome' => 'José', 'snome' => 'Silva', 'idade' => '18', 'sexo' => 'M'),
        array('nome' => 'João', 'snome' => 'Souza', 'idade' => '19', 'sexo' => 'M'),
        array('nome' => 'Joana', 'snome' => 'Santos', 'idade' => '13', 'sexo' => 'F'),
        array('nome' => 'Joabe', 'snome' => 'Simões', 'idade' => '16', 'sexo' => 'M'),
        array('nome' => 'Joaquim', 'snome' => 'Salgado', 'idade' => '14', 'sexo' => 'M')

    );
    public function lista(){    //defina a database no arquivo database.php e configure o autoload.php

         /* retorna todos os registros da tabela pessoa 
           $sql = 'SELECT * FROM pessoa'; 
           $rs = $this->db->query($sql); */

          $rs =$this->db->get('pessoa');   

        
        /* $conditions = array('idade >' => '80');     // mesmo que $sql ='SELECT * FROM pessoa WHERE idade > 80'; 
        $rs =$this->db->get_where('pessoa',$conditions); 
        $result = $rs->result_array();     //organizar estes dados   */

       /* $conditions = array('idade >' => '19', 'idade <' => '31'); // $sql ='SELECT * FROM pessoa WHERE idade > 19 AND idade < 31'; 
        $rs =$this->db->get_where('pessoa',$conditions); */
        $result = $rs->result_array();

        return $result; //retorna os dados
    }

   /* inserir sem bd
         public function clientes(){
        $cliente[] = array(

            'foto' => 3,
            'nome' => 'Jose Silva',
            'endereco' => 'Rua Pernambuco, 207 - Ponte Alta- Guarulhos- SP',
            'telefone' => '(11)2088-8192'

        );
        $cliente[] = array(

            'foto' => 14,
            'nome' => 'João Souza',
            'endereco' => 'Rua Maria, 207 - Ponte Alta- Guarulhos- SP',
            'telefone' => '(12)8088-8192'

        );
        $cliente[] = array(

            'foto' => 30,
            'nome' => 'Joana Santos',
            'endereco' => 'Rua Pernambuco, 532 - Ponte Alta- Guarulhos- SP',
            'telefone' => '(11)5082-2292'

        );
        $cliente[] = array(

            'foto' => 20,
            'nome' => 'Joabe Simões',
            'endereco' => 'Rua Soraia, 532 - Lavras- Guarulhos- SP',
            'telefone' => '(11)2082-2292'

        );
        return $cliente;
    }*/

    public function cria_usuario($data){
        $this->db->insert('pessoa', $data);
    }

    public function user_data($id){
        $cond = array('id'=> $id);
        $rs = $this->db->get_where('pessoa', $cond);
        return $rs->row_array();
    }
    public function edita_usuario($data, $id) {
        $this->db->update('pessoa', $data, "id= $id");
    }

    public function delete($id){
        $cond = array('id' => $id);
        $this->db->delete('pessoa', $cond);
    }
}