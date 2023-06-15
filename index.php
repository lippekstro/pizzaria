<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pizzaria/templates/cabecalho.php';
?>

<section class="d-flex justify-content-center">
    <div id="carouselExampleDark" class="carousel carousel-light slide carousel-fade m-3 col col-lg-6 col-11" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="https://source.unsplash.com/random/1920x1080/?pizza" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://source.unsplash.com/random/1920x1080/?soda" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://source.unsplash.com/random/1920x1080/?burguer" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section class="d-flex justify-content-evenly flex-wrap">
    <?php for ($i = 0; $i < 10; $i++) : ?>
        <div class="card m-3" style="width: 18rem;">
            <img src="https://source.unsplash.com/random/1920x1080/?pizza" class="card-img-top" alt="Pizza">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title text-center">Pizza sabor Pizza</h5>
                <p class="card-text">
                <ul>
                    <li>massa</li>
                    <li>molho</li>
                    <li>queijo</li>
                    <li>oregano</li>
                </ul>
                <p class="text-end">R$ 80.00</p>
                </p>
                <a href="#" class="btn btn-primary ">Adicionar ao Carrinho</a>
            </div>
        </div>

    <?php endfor; ?>
</section>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pizzaria/templates/rodape.php';
?>