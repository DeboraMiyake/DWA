<div class="container mt-5">
    <h2 class="text-center">Cadastrar Novo Veículo</h2><br/>
        <form class= "text-center border border-light p-5 col-md-8 mx-auto" method="POST">
                <input required type="text" id="marca" name="carro[marca]" class="form-control mb-4" placeholder="Marca"> 
                <input required type="text" id="modelo"  name="carro[modelo]" class="form-control mb-4" placeholder="Modelo">               
                <input required type="text" id="cor"  name="carro[cor]" class="form-control mb-4" placeholder="Cor">               
                <input required type="number" id="ano" name="carro[ano]"  name="sobrenome" class="form-control mb-4" placeholder="Ano">               
                <button class="btn btn-danger btn-block my-4" type="submit">Enviar</button>

        </form>
</div>