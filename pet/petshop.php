<div class="titulo">Petshop</div>

<?php

// Classe Animal (classe base)
class Animal {
    protected $nome;
    protected $tipo;

    public function __construct($nome, $tipo) {
        $this->nome = $nome;
        $this->tipo = $tipo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getTipo() {
        return $this->tipo;
    }

    // Método para calcular o preço do banho e tosa
    public function calcularPrecoBanhoTosa($imposto, $gastosProdutos) {
        return ($imposto + $gastosProdutos);
    }
}

// Interface para regras de negócio
interface RegrasNegocio {
    public function calcularImposto();
    public function calcularGastosProdutos();
}

// Classe Pessoa (classe base)
class Pessoa {
    protected $nome;
    protected $cargo;

    public function __construct($nome, $cargo) {
        $this->nome = $nome;
        $this->cargo = $cargo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCargo() {
        return $this->cargo;
    }
}

// Classe Cliente (herda de Pessoa)
class Cliente extends Pessoa {
    protected $animal;

    public function __construct($nome, $animal) {
        parent::__construct($nome, 'Cliente');
        $this->animal = $animal;
    }

    public function getAnimal() {
        return $this->animal;
    }
}

// Classe Gerente (herda de Pessoa)
class Gerente extends Pessoa implements RegrasNegocio {
    public function __construct($nome) {
        parent::__construct($nome, 'Gerente');
    }

    public function calcularImposto() {
        // Lógica para calcular imposto do Gerente
        return 1000;
    }

    public function calcularGastosProdutos() {
        // Lógica para calcular gastos de produtos do Gerente
        return 500;
    }
}

// Classe Banhista (herda de Pessoa)
class Banhista extends Pessoa implements RegrasNegocio {
    public function __construct($nome) {
        parent::__construct($nome, 'Banhista');
    }

    public function calcularImposto() {
        // Lógica para calcular imposto do Banhista
        return 200;
    }

    public function calcularGastosProdutos() {
        // Lógica para calcular gastos de produtos do Banhista
        return 100;
    }
}

// Classe Tosador (herda de Pessoa)
class Tosador extends Pessoa implements RegrasNegocio {
    public function __construct($nome) {
        parent::__construct($nome, 'Tosador');
    }

    public function calcularImposto() {
        // Lógica para calcular imposto do Tosador
        return 250;
    }

    public function calcularGastosProdutos() {
        // Lógica para calcular gastos de produtos do Tosador
        return 150;
    }
}

// Classe Caixa (herda de Pessoa)
class Caixa extends Pessoa implements RegrasNegocio {
    public function __construct($nome) {
        parent::__construct($nome, 'Caixa');
    }

    public function calcularImposto() {
        // Lógica para calcular imposto do Caixa
        return 300;
    }

    public function calcularGastosProdutos() {
        // Lógica para calcular gastos de produtos do Caixa
        return 200;
    }
}

// Exemplo de uso:
$animal1 = new Animal('Rex', 'Cachorro');
$cliente1 = new Cliente('João', $animal1);
$gerente1 = new Gerente('Maria');
$banhista1 = new Banhista('Pedro');
$tosador1 = new Tosador('Ana');
$caixa1 = new Caixa('Lucas');

$animal2 = new Animal('Kyara', 'Gato');
$cliente2 = new Cliente('Verônica', $animal2);
$gerente2 = new Gerente('Maria');
$banhista2 = new Banhista('Pedro');
$tosador2 = new Tosador('Ana');
$caixa2 = new Caixa('Lucas');

$imposto = $gerente1->calcularImposto() + $banhista1->calcularImposto() + $tosador1->calcularImposto() + $caixa1->calcularImposto();
$gastosProdutos = $gerente1->calcularGastosProdutos() + $banhista1->calcularGastosProdutos() + $tosador1->calcularGastosProdutos() + $caixa1->calcularGastosProdutos();

$precoBanhoTosa = $animal1->calcularPrecoBanhoTosa($imposto, $gastosProdutos);

echo "Cliente: {$cliente1->getNome()}\n" . "<br>";
echo "Animal: {$cliente1->getAnimal()->getNome()} ({$cliente1->getAnimal()->getTipo()})\n" . "<br>";
echo "Preço do banho e tosa: $precoBanhoTosa\n";

$imposto1 = $gerente2->calcularImposto() + $banhista2->calcularImposto() + $tosador2->calcularImposto() + $caixa2->calcularImposto();
$gastosProdutos2 = $gerente2->calcularGastosProdutos() + $banhista2->calcularGastosProdutos() + $tosador2->calcularGastosProdutos() + $caixa2->calcularGastosProdutos();

$precoBanhoTosa2 = $animal2->calcularPrecoBanhoTosa($imposto, $gastosProdutos);

echo "<br> Cliente: {$cliente2->getNome()}\n" . "<br>";
echo "Animal: {$cliente2->getAnimal()->getNome()} ({$cliente2->getAnimal()->getTipo()})\n" . "<br>";
echo "Preço do banho e tosa: $precoBanhoTosa2\n";

?>
