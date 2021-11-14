<?php
abstract class Discount{
    protected $discount;
    function __construct($discount=0)
    {
        $this->discount = $discount;
    }

    abstract function calcular($discount);
}


class ApplyDiscount extends Discount{

    function setDiscount($disconto){
        $this->discount = $disconto;
    }

    function calcular($total)
    {
        return $total - ($total * $this->discount / 100 );     
    }
}

?>