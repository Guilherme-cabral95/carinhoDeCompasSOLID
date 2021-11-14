<?php
class Produto{
    private $nome;
    private $preco;
    private $quantidade;


    function __construct($nome,$preco,$quantidade)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }


    function getNome(){
        return $this->nome;
    }

    function getPreco(){
        return $this->preco;
    }

    function getQuatindade(){
        return $this->quantidade;

    }

    function getPrecoTotal(){
        return (float)$this->preco * (int)$this->quantidade;    
    }


}
?>