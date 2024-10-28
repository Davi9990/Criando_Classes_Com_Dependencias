<?php

class Produto
{
    public string $nome;
    public float $preco;
    public int $quantidade;

    public function __construct(string $nome, float $preco, int $quantidade)
    {
        $this-> nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function getnome() { return $this->nome; }

    public function getpreco() { return $this->preco; }

    public function getquantidade() { return $this->quantidade; }

    public function setnome(string $nome) { $this->nome = $nome; }

    public function setpreco(float $preco) { $this->preco = $preco; }

    public function setquantidade(int $quantidade) { $this->quantidade = $quantidade; }
}