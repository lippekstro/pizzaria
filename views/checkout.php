<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pizzaria/templates/cabecalho.php';
$divisao = $_POST['divisao'];
$tamanho = $_POST['tamanho'];
$sabor1 = $_POST['sabor1'];

if(isset($_POST['sabor2'])){
    $sabor2 = $_POST['sabor2'];
}
?>

<section class="container mb-3">
    <main>
        <div class="py-5 text-center text-white">
            <img class="d-block mx-auto mb-4" src="/pizzaria/img/pizza.svg" alt="" width="72" height="57">
            <h2>Conclua sua Compra</h2>
            <p class="lead">Coloque seus dados</p>
        </div>

        <div class="row g-5 bg-secondary text-white">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="">Seu Carrinho</span>
                    <!-- <span class="badge bg-primary rounded-pill">3</span> -->
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Nome do Produto</h6>
                            <small class="text-body-secondary">Descrição</small>
                        </div>
                        <span class="text-body-secondary">R$ 12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Segundo Produto</h6>
                            <small class="text-body-secondary">Descrição</small>
                        </div>
                        <span class="text-body-secondary">R$ 8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Terceiro Item</h6>
                            <small class="text-body-secondary">Descrição</small>
                        </div>
                        <span class="text-body-secondary">R$ 5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                        <div class="text-success">
                            <h6 class="my-0">Código Promocional</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">R$ -5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total</span>
                        <strong>R$ 20</strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Código Promocional">
                        <button type="submit" class="btn btn-secondary">Resgatar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Endereço de Cobrança</h4>
                <form class="needs-validation" method="POST">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Nome válido é necessário
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Sobrenome</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Sobrenome válido é necessário
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Usuário</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" id="username" placeholder="Usuário" required="">
                                <div class="invalid-feedback">
                                    Seu nome de usuário é necessário
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="voce@exemplo.com">
                            <div class="invalid-feedback">
                                Por favor, insira um email valido
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="address" placeholder="Rua Exemplo, 11, Centro" required="">
                            <div class="invalid-feedback">
                                Por favor, entre com seus dados de entrega
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address2" class="form-label">Endereço 2 <span class="text-body-secondary">(Optional)</span></label>
                            <input type="text" class="form-control" id="address2" placeholder="Apartamento">
                        </div>

                        <div class="col-md-5">
                            <label for="country" class="form-label">País</label>
                            <select class="form-select" id="country" required="">
                                <option value="">Escolha...</option>
                                <option>Brasil</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor, selecione um país válido
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="state" class="form-label">Estado</label>
                            <select class="form-select" id="state" required="">
                                <option value="">Escolha...</option>
                                <option>MA</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor, forneca um estado valido
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="zip" class="form-label">CEP</label>
                            <input type="text" class="form-control" id="zip" placeholder="" required="">
                            <div class="invalid-feedback">
                                CEP é necessário
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">Endereço de entrega é o mesmo que o de cobrança</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="save-info">
                        <label class="form-check-label" for="save-info">Salvar informações para proximos pedidos</label>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3">Pagamento</h4>

                    <div class="my-3">
                        <div class="form-check">
                            <input id="credito" name="paymentMethod" type="radio" class="form-check-input" required="">
                            <label class="form-check-label" for="credito">Credito</label>
                        </div>
                        <div class="form-check">
                            <input id="debito" name="paymentMethod" type="radio" class="form-check-input" required="">
                            <label class="form-check-label" for="debito">Debito</label>
                        </div>
                        <div class="form-check">
                            <input id="pix" name="paymentMethod" type="radio" class="form-check-input" required="">
                            <label class="form-check-label" for="pix">Pix</label>
                        </div>
                    </div>

                    <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="cc-name" class="form-label">Nome no Cartão</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                            <small class="text-body-secondary">Nome completo como exibido no cartão</small>
                            <div class="invalid-feedback">
                                Nome no cartão é necessário
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="cc-number" class="form-label">Numero do Cartão de Crédito</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                            <div class="invalid-feedback">
                                Numero do Cartão de Crédito é necessário
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="cc-expiration" class="form-label">Vencimento</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                            <div class="invalid-feedback">
                                Vencimento é necessário
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="cc-cvv" class="form-label">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                            <div class="invalid-feedback">
                                Codigo de segurança é necessario
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg mb-3" type="submit">Continuar</button>
                </form>
            </div>
        </div>
    </main>

</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pizzaria/templates/rodape.php';
?>