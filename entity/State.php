<?php 
require_once "./interfaces/StateEnuns.php";
require_once "./interfaces/carrinho_comprasIterface.php";


class State{
    private $carrinho;
    private $state = StateEnuns::Ativo ;

    function __construct(carrinho_comprasIterface $carrinho)
    {
        $this->carrinho = $carrinho;
    }

    function getStatus(){
        return $this->state;
    }

    function checkout(){
        try {
            $this->carrinho->verificar();
            $this->state = StateEnuns::fechado;
            echo "o pedido foi fechado do  {$this->carrinho->getCliente()->exibir() }, total de {$this->carrinho->getSomaItens()} ";
            $this->carrinho->zerar();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}

?>