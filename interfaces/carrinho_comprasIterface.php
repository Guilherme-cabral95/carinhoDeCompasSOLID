<?php
interface carrinho_comprasIterface{
    public function getCliente();


    function getItem();

    function addItem($produto);

    function removeItem($index);

    function buncarIndex($index);

    function getSomaItens();




    function verificar();

    function zerar();


}

?>