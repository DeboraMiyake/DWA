<div class="container  mt-5"> <br/> <br/>
    <div class="row mx-auto">
        <div class="col-md-6 mx-auto">

        <form method="POST" enctype="multipart/form-data" class="text-center border border-light p-5" >
            <p class="h4 mb-4">Envie uma nova paisagem</p>
            <input type="text" name="titulo" class="form-control mb-4">
            <input type="file" name="userfile" class="form-control mb-4" placeholder="Selecione uma imagem">
            <button class="btn btn-danger btn-block my-4" type="submit">Enviar</button>
        </form>

        </div>
        <div class="col-md-6">
            <?= $imagens ?>
        </div>

    </div>
</div>