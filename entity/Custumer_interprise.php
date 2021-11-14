<?php

class Custumer_interprise implements cliente_interprise
{
    private $name;
    private $cnpj;


    public function __construct($name, $cnpj)
    {
        $this->name = $name;
        $this->cnpj = $cnpj;
    }


    public function getName()
    {
        return $this->name;
    }


    public function getDocument()
    {
        return $this->cnpj;
    }


    public function setName($name)
    {
        $this->name = $name;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function exibir()
    {
        return "Empresa {$this->name}";
    }
}