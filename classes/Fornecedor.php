<?php
class fornecedor {
    #Atributos Básicos
    private $cnpj;
    private $nome;
    private $telefone;
    private $email;

public function getCnpj() {
return $this->cnpj;
}

public function getNome() {
return $this->nome;
}

public function getTelefone() {
return $this->telefone;
}

public function getEmail() {
return $this->email;
}

public function setCnpj($cnpj): void {
$this->cnpj = $cnpj;
}

public function setNome($nome): void {
$this->nome = $nome;
}

public function setTelefone($telefone): void {
$this->telefone = $telefone;
}

public function setEmail($email): void {
$this->email = $email;
}
public function cadastrar(){
    
}
}

