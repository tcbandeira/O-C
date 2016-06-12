<?php
include_once './Conta.php';

final class ContaPoupanca extends Conta {

    public function sacar($valor){
        $this->saldo -= $valor;
    }
    
}