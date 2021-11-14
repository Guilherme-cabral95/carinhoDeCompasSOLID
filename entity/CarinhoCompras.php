<?php
require "./interfaces/StateEnuns.php";
require "./interfaces/carrinho_comprasIterface.php";
require "./interfaces/custumer-interface.php";

require_once "./entity/Discount.php";


    class CarinhoCompras implements  carrinho_comprasIterface {
        private $item = [];
        private $discount;
        private $cliente;

        function __construct(Discount $discount,cliente $cliente)
        {   
            $this->discount = $discount;
            $this->cliente = $cliente;
        }

        /**
         * @return cliente
         */
        public function getCliente()
        {
            return $this->cliente;
        }



        function getItem(){
            return $this->item;
        }

        function addItem($produto){
            array_push($this->item,$produto);
        }

        function removeItem($index){
            unset($this->item[$index]);
        }

        function buncarIndex($index){
            return $this->item[$index];
        }

        function getSomaItens(){
            
            $total = array_reduce($this->item,function($cary,$item){
                $cary = $cary + $item->getPrecoTotal();
                return $cary;  
            },0);
           
            return $this->discount->calcular($total);
        }

  


        function verificar(){
            if(count($this->item) == 0 ){
                throw new Exception("o carrinho está vazio");  
            }
        }

        function zerar(){
            $this->item = [];          
        }


        

    
    }
?>