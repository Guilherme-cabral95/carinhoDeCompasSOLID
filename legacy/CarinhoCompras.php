<?php
    class CarinhoCompras{
        private $item = [];
        private $state = "A";

        function __construct()
        {
            
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
            
            return array_reduce($this->item,function($cary,$item){
                $cary = $cary + $item->getPrecoTotal();
                return $cary;  
            },0);
        }

        function getStatus(){
            return $this->state;
        }

        function checkout(){
            try {
                $this->verificar();
                $this->state = "C";
                echo "o pedido foi fechado, total de {$this->getSomaItens()} ";
                $this->item = [];
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }



        private function verificar(){
            if(count($this->item) == 0 ){
                throw new Exception("o carrinho está vazio");
                
            }
        }


        

    
    }
?>