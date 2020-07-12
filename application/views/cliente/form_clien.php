
<div class="container my-5">
    <?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>
    
    <div class="row ">
        <div class="col-md-6 mx-auto my-5">
            <form class="text-center border border-light p-5" method="POST">
                <p class="h4 mb-4">Cadastre-se</p>
                <!--nome e id são obrigatorios e devem ser iguais (igual o nome das colunas do bd)-->
                <input value = "<?= isset($user) ? $user['nome'] : '' ?>" type="text" id="nome" name="nome" class="form-control mb-4" placeholder="Nome do usuário"> 
                <input value = "<?= isset($user) ? $user['sobrenome'] :'' ?>" type="text" id="sobrenome"  name="sobrenome" class="form-control mb-4" placeholder="Sobrenome">               
                <input value = "<?= isset($user) ? $user['idade'] : '' ?>" type="number" id="idade"  name="idade" class="form-control mb-4" placeholder="Sua idade">               
                <input value = "<?= isset($user) ? $user['sexo'] : '' ?>" type="text" id="sexo" name="sexo"  name="sobrenome" class="form-control mb-4" placeholder="Masculino ou Feminino">               
                <button class="btn btn-info btn-block my-4" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>

