<?php

class Produto{

    public $descricao;
    public $estoque;
    public $preco;
    
    function aumentarEstoque($v1){
        $this->estoque += $v1;
    }

    function diminuirEstoque($v1){
        $this->estoque -= $v1;
    }

    function reajustarPreco($percentual){
        $this->preco += ($percentual * $this->preco) / 100;
    }


}

$produto = new Produto;

$produto->descricao = "computador";
$produto->estoque = 50;
$produto->preco = 5000;

echo "O $produto->descricao tem
$produto->estoque unidades em estoque com o preço unitário de R$ $produto->preco.<br>";

$produto->aumentarEstoque(10);
$produto->diminuirEstoque(5);
$produto->reajustarPreco(50);

echo "<br> O $produto->descricao tem
$produto->estoque unidades em estoque com o preço unitário de R$ $produto->preco."


?>