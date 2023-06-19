var divisaoRadio = document.querySelectorAll('input[name="divisao"]');
var opcoesTamanho = document.getElementById('opcoes-tamanho');
var tamPequeno = document.getElementById('tamP');
var opcoesSabor1 = document.getElementById('opcoes-sabor1');
var opcoesSabor2 = document.getElementById('opcoes-sabor2');

var todosRadio = document.querySelectorAll('input[type="radio"]');

divisaoRadio.forEach(function (radio) {
    radio.addEventListener('change', function () {
        if (this.value === 'inteira') {
            opcoesTamanho.classList.remove('d-none');
            tamPequeno.classList.remove('d-none');
            opcoesSabor1.classList.add('d-none');
            opcoesSabor2.classList.add('d-none');

        } else if (this.value === 'metade') {
            opcoesTamanho.classList.remove('d-none');
            tamPequeno.classList.add('d-none');
            opcoesSabor1.classList.add('d-none');
            opcoesSabor2.classList.add('d-none');

        }

        var divisaoIndex = Array.from(divisaoRadio).indexOf(radio);
        todosRadio.forEach(function (radio, index) {
            if (index > divisaoIndex && radio.checked) {
                radio.checked = false;
            }
        });
    });
});

var tamanhoRadio = document.querySelectorAll('input[name="tamanho"]');
var pizzaInteira = document.getElementById('inteira');
var pizzaMetade = document.getElementById('metade');

tamanhoRadio.forEach(function (radio) {
    radio.addEventListener('change', function () {
        if (pizzaInteira.checked) {
            opcoesSabor1.classList.remove('d-none');
            opcoesSabor2.classList.add('d-none');

        } else if (pizzaMetade.checked) {
            opcoesSabor1.classList.remove('d-none');
            opcoesSabor2.classList.remove('d-none');
        }
    });
});