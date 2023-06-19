<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pizzaria/templates/cabecalho.php';
?>

<section class="container">
    <div class="py-5 text-center text-white">
        <img class="d-block mx-auto mb-4" src="https://source.unsplash.com/random/1920x1080/?pizza, logo" alt="" width="72" height="57">
        <h2>Monte Sua Pizza</h2>
        <p class="lead">Personalize seu pedido</p>
    </div>

    <div class="row g-5 text-white">
        <form action="" method="POST">
            <h4 class="mb-3">Divisão</h4>
            <div class="my-3">
                <div class="form-check">
                    <input id="inteira" name="divisao" type="radio" class="form-check-input" value="inteira" required="">
                    <label class="form-check-label" for="inteira">Inteira</label>
                </div>

                <div class="form-check">
                    <input id="metade" name="divisao" type="radio" class="form-check-input" value="metade" required="">
                    <label class="form-check-label" for="metade">Metade / Metade</label>
                </div>
            </div>


            <div class="d-none" id="opcoes-tamanho">
                <hr class="my-4">
                <h4 class="mb-3">Tamanho</h4>
                <div class="my-3">
                    <div class="form-check d-none" id="tamP">
                        <input id="pequena" name="tamanho" type="radio" class="form-check-input" required="">
                        <label class="form-check-label" for="pequena">Pequena</label>
                    </div>

                    <div class="form-check">
                        <input id="media" name="tamanho" type="radio" class="form-check-input" required="">
                        <label class="form-check-label" for="media">Media</label>
                    </div>

                    <div class="form-check">
                        <input id="grande" name="tamanho" type="radio" class="form-check-input" required="">
                        <label class="form-check-label" for="grande">Grande</label>
                    </div>

                    <div class="form-check">
                        <input id="familia" name="tamanho" type="radio" class="form-check-input" required="">
                        <label class="form-check-label" for="familia">Familia</label>
                    </div>
                </div>
            </div>

            <div class="d-none" id="opcoes-sabor1">
                <hr class="my-4">
                <h4 class="mb-3">Sabor 1</h4>
                <div class="my-3">
                    <div class="form-check">
                        <input id="calabresa_s1" name="sabor1" type="radio" class="form-check-input" required="">
                        <label class="form-check-label" for="calabresa_s1">Calabresa</label>
                    </div>

                    <div class="form-check">
                        <input id="frango_s1" name="sabor1" type="radio" class="form-check-input" required="">
                        <label class="form-check-label" for="frango_s1">Frango</label>
                    </div>

                    <div class="form-check">
                        <input id="queijo4_s1" name="sabor1" type="radio" class="form-check-input" required="">
                        <label class="form-check-label" for="queijo4_s1">4 Queijos</label>
                    </div>

                    <div class="form-check">
                        <input id="portuguesa_s1" name="sabor1" type="radio" class="form-check-input" required="">
                        <label class="form-check-label" for="portuguesa_s1">Portuguesa</label>
                    </div>
                </div>
            </div>

            <div class="d-none" id="opcoes-sabor2">
                <hr class="my-4">
                <h4 class="mb-3">Sabor 2</h4>
                <div class="my-3">
                    <div class="form-check">
                        <input id="calabresa_s2" name="sabor2" type="radio" class="form-check-input" required="">
                        <label class="form-check-label" for="calabresa_s2">Calabresa</label>
                    </div>

                    <div class="form-check">
                        <input id="frango_s2" name="sabor2" type="radio" class="form-check-input" required="">
                        <label class="form-check-label" for="frango_s2">Frango</label>
                    </div>

                    <div class="form-check">
                        <input id="queijo4_s2" name="sabor2" type="radio" class="form-check-input" required="">
                        <label class="form-check-label" for="queijo4_s2">4 Queijos</label>
                    </div>

                    <div class="form-check">
                        <input id="portuguesa_s2" name="sabor2" type="radio" class="form-check-input" required="">
                        <label class="form-check-label" for="portuguesa_s2">Portuguesa</label>
                    </div>
                </div>
            </div>
        </form>

    </div>

</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pizzaria/templates/rodape.php';
?>