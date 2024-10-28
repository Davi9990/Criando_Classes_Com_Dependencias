<?php

class Carrinho extends Produto
{
    private $produtos = [];

    public function adicionar(Produto $produto)
    {
        if($produto->getpreco() > 0 &&  $produto-> getquantidade() > 1)
        {
            $this->produtos[] = $produto;
        } else {
            echo "Produto inválido ou sem estoque suficiente.<br>";
        }
    }

    public function listarProdutos()
    {
        foreach($this->produtos as $produto)
        {
            echo "Produto: ". $produto->getnome() . "- Preço: ". $produto->getpreco() . "<br>";
        }
    }
}