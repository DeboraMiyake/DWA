<div class="container mt-4">
    <div class="row">
        <h2 class="col-md-10">lista de carros</h2>
        <a href="<?= base_url('carro/cadastro') ?>" class="btn btn-danger">Novo carro</a>
    </div>

    <div class="mt-5">
         <div class="row">
            <?= $carros ?>
        </div>
    </div>
    
</div>