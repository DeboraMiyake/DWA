<?php

class PaisagemModel extends CI_Model{
    public function salva(){
        if(! sizeof($POST)) return;
        $img_name = $this->input->post('titulo');

        $config['upload_path']           = './uploads/';
        $config['allowed_types']         = 'jpg|png';
        $config['max_size']              = 4096;
        $config['file_name']             = $img_name.'.jpg';
        $config['overwrite']             = true;

        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        return $this->image_card($img_name.'.jpg');
    }
    private function image_card($img){
        $html = '
         <div class="card">
             <img class="card-img-top img-thumbnail" src="'.base_url('uploads/'.$img).'">
         </div>';
         return $html;
    }
    public function lista(){
        $v = get_filenames('uploads');
        $html = '';
      
        foreach($v AS $img){
            $html .='<div class="col-md-3 mt-3">';
            $html .=$this->image_card($img);
            $html .='</div>';
        }
        return $html;
    }
}