<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pizzaria/templates/cabecalho.php';
?>

<section class="d-flex justify-content-center">
    <form class="col col-lg-3 col-sm-12 m-3" action="">
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="nome@exemplo.com">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
            <label for="floatingPassword">Senha</label>
        </div>
        
        
        <button type="button" class="btn btn-primary col col-12 mb-3"><a href="" class="link-light link-underline">Registre-se</a></button>
        <button type="button" class="btn btn-primary col col-12">Entrar</button>
    </form>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pizzaria/templates/rodape.php';
?>