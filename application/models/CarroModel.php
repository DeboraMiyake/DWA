<?php
    include APPPATH. 'libraries/Car.php';
    class CarroModel extends CI_Model{ 

        public function lista_carros(){
            $html = '';
            $car = new Car();
            $v = $car->get_all();

            foreach ($v as $carro) {
                $html .= $this->car_display($carro);                
            }
            return $html;
        }

    private function car_display($carro){
        $html = '
         <div class="card col-md-4">
          <img class="card-img-top" src="'.base_url('uploads/carros/'.$carro['foto']).'">

          <div class="card-body">
            <h4 class="card-title"><a href="'.base_url('carro/detalhe/'.$carro['id']).'">'.$carro['modelo'].'</a></h4>
            <p class="card-text">
            '.$carro['marca'].' -
            '.$carro['cor'].',
            '.$carro['ano'].'.
            </p>
        
          </div>

        </div>';
        return $html;
    }
    public function nome_carro($id){
        $car = new Car();
        return $car->get_name($id);
    }

    public function lista_fotos($id){
        $html = '';

        $car = new Car();
        $lista = $car->lista_fotos($id);
        foreach ($lista as $foto) {
            $html.= $this->foto_display($foto);
        }
        return $html;
    }
    private function foto_display($foto){
        $html = '<div class="col-md-4 my-3">';
        $html .= '<img src="'.base_url('uploads/carros/'.$foto->foto).'"class=thumbnail"  width="350" height="210" >';
        $html .= '</div>';
        return $html;

    }
    public function cria_carro(){
        if(sizeof($_POST) == 0) return;

        $carro = $this->input->post('carro');
        $carro['foto'] = '';
        $car = new Car();
        $car->cria($carro); 

    }
}