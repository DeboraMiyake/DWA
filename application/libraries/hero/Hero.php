<?php
    class Hero extends CI_Object{
        private $nome;
        private $nasc;

        function __construct($nome, $nasc){
            $this->nome = $nome;
            $this->nasc = $nasc;        
        }
        
        public function save(){
                $aux['nome'] = $this->nome;
                $aux['nasc'] = $this->nasc;

                $this->db->insert('hero_data', $aux);
                return $this->db->insert_id();
            
        }
    
    }