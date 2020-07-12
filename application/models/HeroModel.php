<?php
    include APPPATH. 'libraries/hero/Hero.php';
    include APPPATH. 'libraries/hero/Power.php';

    class HeroModel extends CI_Model{
        public function salva(){
            if(sizeof($_POST) == 0) return;
            $nome = $this->input->post('nome');
            $nasc = $this->input->post('nasc');
            $power = $this->input->post('power');

            $hero = new Hero($nome, $nasc); 
            $id_hero = $hero->save();

            $powers = new Power($id_hero, $power);
            $powers->save();
        }
    }