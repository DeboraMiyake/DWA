<?php
    class Car extends CI_Object{
        public function get_all(){
           $rs = $this->db->get('carro'); //retorna os registros da tabela do bd
           return $rs->result_array();

        }
        public function get_name($id){
            $cond['id'] = $id;
            $rs=$this->db->get_where('carro', $cond);
            
            $car = $rs->row();
            return $car->marca. ' '.$car->modelo;
        }

        public function lista_fotos($id){
            $cond['id_carro'] = $id;
            $rs = $this->db-> get_where('carro_foto', $cond);
            return $rs->result();
        }
        
        public function cria($carro){
            $this->db->insert('carro', $carro);
            return $this->db->insert_id();
            
        }
    }