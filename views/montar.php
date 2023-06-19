<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pizzaria/templates/cabecalho.php';
?>

<section class="container mb-3">
    <div class="py-5 text-center text-white">
        <img class="d-block mx-auto mb-4" src="/pizzaria/img/pizza.svg" alt="" width="72" height="57">
        <h2>Monte Sua Pizza</h2>
        <p class="lead">Personalize seu pedido</p>
    </div>

    <div class="row text-white">
        <form action="" method="POST" class="bg-secondary py-3">
            <h4 class="mb-3">Divisão</h4>
            <div class="my-3">
                <div class="form-check d-flex align-items-center">
                    <input id="inteira" name="divisao" type="radio" class="form-check-input" value="inteira" required="">
                    <label class="form-check-label d-flex align-items-center ms-2" for="inteira">
                        Inteira
                        <img class="d-block mx-auto" src="/pizzaria/img/pizza2.svg" alt="" width="72" height="57">
                    </label>
                </div>

                <div class="form-check d-flex align-items-center">
                    <input id="metade" name="divisao" type="radio" class="form-check-input" value="metade" required="">
                    <label class="form-check-label d-flex align-items-center ms-2" for="metade">
                        2 sabores
                        <img class="d-block mx-auto" src="/pizzaria/img/pizza2.svg" alt="" width="72" height="57">
                    </label>
                </div>
            </div>

            <div class="d-none" id="opcoes-tamanho">
                <hr class="my-4">
                <h4 class="mb-3">Tamanho</h4>
                <div class="my-3">
                    <div class="form-check d-flex d-none align-items-center" id="tamP">
                        <input id="pequena" name="tamanho" type="radio" class="form-check-input" value="pequena" required="">
                        <label class="form-check-label d-flex align-items-center ms-2" for="pequena">
                            Pequena
                            <img class="d-block mx-auto" src="/pizzaria/img/pizza2.svg" alt="" width="72" height="57">
                        </label>
                    </div>

                    <div class="form-check d-flex align-items-center">
                        <input id="media" name="tamanho" type="radio" class="form-check-input" value="media" required="">
                        <label class="form-check-label d-flex align-items-center ms-2" for="media">
                            Media
                            <img class="d-block mx-auto" src="/pizzaria/img/pizza2.svg" alt="" width="72" height="57">
                        </label>
                    </div>

                    <div class="form-check d-flex align-items-center">
                        <input id="grande" name="tamanho" type="radio" class="form-check-input" value="grande" required="">
                        <label class="form-check-label d-flex align-items-center ms-2" for="grande">
                            Grande
                            <img class="d-block mx-auto" src="/pizzaria/img/pizza2.svg" alt="" width="72" height="57">
                        </label>
                    </div>

                    <div class="form-check d-flex align-items-center">
                        <input id="familia" name="tamanho" type="radio" class="form-check-input" value="familia" required="">
                        <label class="form-check-label d-flex align-items-center ms-2" for="familia">
                            Familia
                            <img class="d-block mx-auto" src="/pizzaria/img/pizza2.svg" alt="" width="72" height="57">
                        </label>
                    </div>
                </div>
            </div>

            <div class="d-none" id="opcoes-sabor1">
                <hr class="my-4">
                <h4 class="mb-3">Sabor 1</h4>
                <div class="my-3">
                    <div class="form-check d-flex align-items-center">
                        <input id="calabresa_s1" name="sabor1" type="radio" class="form-check-input" value="calabresa" required="">
                        <label class="form-check-label d-flex align-items-center ms-2" for="calabresa_s1">
                            Calabresa
                            <img class="d-block mx-auto" src="/pizzaria/img/pizza2.svg" alt="" width="72" height="57">
                        </label>
                    </div>

                    <div class="form-check d-flex align-items-center">
                        <input id="frango_s1" name="sabor1" type="radio" class="form-check-input" value="frango" required="">
                        <label class="form-check-label d-flex align-items-center ms-2" for="frango_s1">
                            Frango
                            <img class="d-block mx-auto" src="/pizzaria/img/pizza2.svg" alt="" width="72" height="57">
                        </label>
                    </div>

                    <div class="form-check d-flex align-items-center">
                        <input id="queijo4_s1" name="sabor1" type="radio" class="form-check-input" value="4 queijos" required="">
                        <label class="form-check-label d-flex align-items-center ms-2" for="queijo4_s1">
                            4 Queijos
                            <img class="d-block mx-auto" src="/pizzaria/img/pizza2.svg" alt="" width="72" height="57">
                        </label>
                    </div>

                    <div class="form-check d-flex align-items-center">
                        <input id="portuguesa_s1" name="sabor1" type="radio" class="form-check-input" value="portuguesa" required="">
                        <label class="form-check-label d-flex align-items-center ms-2" for="portuguesa_s1">
                            Portuguesa
                            <img class="d-block mx-auto" src="/pizzaria/img/pizza2.svg" alt="" width="72" height="57">
                        </label>
                    </div>
                </div>
            </div>

            <div class="d-none" id="opcoes-sabor2">
                <hr class="my-4">
                <h4 class="mb-3">Sabor 2</h4>
                <div class="my-3">
                    <div class="form-check d-flex align-items-center">
                        <input id="calabresa_s2" name="sabor2" type="radio" class="form-check-input" value="calabresa">
                        <label class="form-check-label d-flex align-items-center ms-2" for="calabresa_s2">
                            Calabresa
                            <img class="d-block mx-auto" src="/pizzaria/img/pizza2.svg" alt="" width="72" height="57">
                        </label>
                    </div>

                    <div class="form-check d-flex align-items-center">
                        <input id="frango_s2" name="sabor2" type="radio" class="form-check-input" value="frango">
                        <label class="form-check-label d-flex align-items-center ms-2" for="frango_s2">
                            Frango
                            <img class="d-block mx-auto" src="/pizzaria/img/pizza2.svg" alt="" width="72" height="57">
                        </label>
                    </div>

                    <div class="form-check d-flex align-items-center">
                        <input id="queijo4_s2" name="sabor2" type="radio" class="form-check-input" value="4 queijos">
                        <label class="form-check-label d-flex align-items-center ms-2" for="queijo4_s2">
                            4 Queijos
                            <img class="d-block mx-auto" src="/pizzaria/img/pizza2.svg" alt="" width="72" height="57">
                        </label>
                    </div>

                    <div class="form-check d-flex align-items-center">
                        <input id="portuguesa_s2" name="sabor2" type="radio" class="form-check-input" value="portuguesa">
                        <label class="form-check-label d-flex align-items-center ms-2" for="portuguesa_s2">
                            Portuguesa
                            <img class="d-block mx-auto" src="/pizzaria/img/pizza2.svg" alt="" width="72" height="57">
                        </label>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary col col-12 mb-3" type="submit">Continuar</button>
        </form>

    </div>

</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pizzaria/templates/rodape.php';
?>