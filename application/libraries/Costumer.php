<?php
    include_once APPPATH. 'libraries/util/CI_Object.php';

    class Costumer extends CI_Object {

    public function lista(){
        $rs =$this->db->get('cliente');
        $result = $rs->result_array();

        return $result; 

    }
}