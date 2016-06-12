<?php

abstract class  Conta{
    
    protected $agencia;
    protected $numero;
    protected $saldo;
    

    public final function depositar($valor){
        $this->saldo += $valor;
    }
    public function verSaldo(){
        echo $this->saldo;
    }
    

    abstract function sacar($valor);
    
    public function juros(){
        echo $this->saldo + 1;
    }
}