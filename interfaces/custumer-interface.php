<?php
interface  cliente{
    public function setName($name);
    public function exibir();
}


interface  cliente_individual extends cliente{
    public function setCpf($cpf);
    public function setLastName($last);
}

interface  cliente_interprise extends cliente{
    public function setCnpj($cnpj);
}



?>