<?php   
    class Power extends CI_Object{
        private $id_hero;
        private $powers;

        function __construct($id_hero, $powers){
            $this->id_hero = $id_hero;
            $this->powers = $powers;
        }
        public function save(){
            foreach($this->powers as $power){
                $v['power'] = $power;
                $v['id_hero'] = $this->id_hero;
                $this->db->insert('hero_power', $v);
            }
        }
        public function get_list(|$id_hero){
            $sql = 'SELECT * FROM hero_data, hero_power
            WHERE hero_power.id_hero = hero_data.id AND hero_data.id = '.$id_hero;
            $rs = $this->db->query($sql);
            return $rs->result_array
        }

    }