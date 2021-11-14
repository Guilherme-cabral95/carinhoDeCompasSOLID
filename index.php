<?php
require_once "./entity/Discount.php";
require_once "./entity/Produto.php";
require_once "./entity/CarinhoCompras.php";
require_once "./entity/State.php";
require_once "./entity/Custumer_individual.php";
require_once "./entity/Custumer_interprise.php";

$cliente = new custumer_individual("guilherme","cabral","00000000000");
$empresa = new Custumer_interprise("minha empresa","000011110000");


$discount = new ApplyDiscount();

$carinho = new CarinhoCompras($discount,$empresa);
$State = new State($carinho);
$discount->setDiscount("50");

echo $State->getStatus()."\n";

$carinho->addItem(new Produto("mixer",(float)120.2,1));
$carinho->addItem(new Produto("tv",(float)1200.2,1));


$State->checkout()."\n";

$State->checkout()."\n";

?>