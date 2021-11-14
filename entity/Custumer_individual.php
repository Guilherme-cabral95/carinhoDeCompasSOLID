<?php

require_once "./interfaces/custumer-interface.php";
class custumer_individual implements cliente_individual
{
    private $name;
    private $LastName;
    private $cpf;
    private $carinho;

    public function __construct($name, $LastName, $cpf)
    {
        $this->name = $name;
        $this->LastName = $LastName;
        $this->cpf = $cpf;
    }


    public function getName(){
        return $this->name;
    }

    public function getDocument($cpf){
        return $this->cpf;
    }

    public function getLastName(){
        return $this->LastName;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function setLastName($last){
        $this->LastName = $last;
    }

    public function setCarinho($carinho)
    {
        $this->carinho = $carinho;
    }

    public function exibir()
    {
        return "cliente {$this->name}";
    }
}

?>