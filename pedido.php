<?php

class cliente{

    public $numero;
    public $endereco;

}

$cliente = new cliente();
$cliente->nome = "Samara";
$cliente->endereco = "Rua sete de setembro";


class pedido{
    public $numero;
    public $cliente;

}

$pedido = new pedido();
$pedido->numero = "123";
$pedido->cliente =$cliente;


$dados = array('numero'=> $pedido-> cliente->nome, 
'endereco_cliente'=> $pedido->cliente->endereco);
