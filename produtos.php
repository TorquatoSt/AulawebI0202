<?php

class produtos{
    public $nome;
    public $valor;

    function __construct($nome, $valor){
        $this->nome = $nome;
        $this->valor = $valor;

    }
}

class carrinho{

    public $prodCar;

    public function adiciona(produtos $produto){
        $this->prodCar[] = $produto;
    }

    public function exibir(){
        foreach ($this->prodCar as $prod){
            echo $prod->nome. '<br>';
            echo $prod->valor. '<hr>';
        }
    }
    
}

$produto1 = new produtos("computador ", "2000");
$produto2 = new produtos("mouse", "50");
$produto3 = new produtos("notebook ", "3000");
$produto4 = new produtos("tablet ", "1000");
$produto5 = new produtos("geladeira ", "4000");
$produto6 = new produtos("televisão", "2800");
$produto7 = new produtos("armário ", "1800");
$produto8 = new produtos("cama", "1600");
$produto9 = new produtos("fogão ", "2400");
$produto10 = new produtos("mesa ", "1500");

$carrinho = new carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);
$carrinho->adiciona($produto3);
$carrinho->adiciona($produto4);
$carrinho->adiciona($produto5);
$carrinho->adiciona($produto6);
$carrinho->adiciona($produto7);
$carrinho->adiciona($produto8);
$carrinho->adiciona($produto9);
$carrinho->adiciona($produto10);

$carrinho->exibir();


