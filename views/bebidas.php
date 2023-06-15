<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pizzaria/templates/cabecalho.php';
?>

<section class="d-flex justify-content-evenly flex-wrap">
    <?php for ($i = 0; $i < 10; $i++) : ?>
        <div class="card m-3" style="width: 18rem;">
            <img src="https://source.unsplash.com/random/1920x1080/?drink" class="card-img-top" alt="Pizza">
            <div class="card-body">
                <h5 class="card-title">Bebida</h5>
                <p class="card-text">
                <ul>
                    <li>vodka</li>
                    <li>agua de coco</li>
                </ul>
                </p>
                <a href="#" class="btn btn-primary">Adicionar ao Carrinho</a>
            </div>
        </div>

    <?php endfor; ?>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pizzaria/templates/rodape.php';
?>