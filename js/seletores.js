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

var radiosSabor2 = document.querySelectorAll('input[name="sabor2"]');

tamanhoRadio.forEach(function (radio) {
    radio.addEventListener('change', function () {
        if (pizzaInteira.checked) {
            opcoesSabor1.classList.remove('d-none');
            opcoesSabor2.classList.add('d-none');
            radiosSabor2.forEach(function (radio) {
                radio.required = false;
            });

        } else if (pizzaMetade.checked) {
            opcoesSabor1.classList.remove('d-none');
            opcoesSabor2.classList.remove('d-none');
            radiosSabor2.forEach(function (radio) {
                radio.required = true;
            });
        }
    });
});

// Obtém as opções de sabor 1 e sabor 2
var sabor1Options = document.querySelectorAll('#opcoes-sabor1 input[name="sabor1"]');
var sabor2Options = document.querySelectorAll('#opcoes-sabor2 input[name="sabor2"]');

// Adiciona um evento de mudança para cada opção de sabor 1
sabor1Options.forEach(function(option) {
  option.addEventListener('change', function() {
    var sabor1Value = this.value;

    // Desabilita a opção equivalente em sabor 2
    sabor2Options.forEach(function(sabor2Option) {
      if (sabor2Option.value === sabor1Value) {
        sabor2Option.disabled = true;
      } else {
        sabor2Option.disabled = false;
      }
    });
  });
});

