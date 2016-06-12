<?php
include_once './Conta.php';

final class ContaCorrente extends Conta {


    public function sacar($valor){
        $this->saldo -= $valor;
        $this->saldo --;
    }

    public function juros(){
        echo $this->saldo - 1;
    }
    public function emitirCheque($quantidade){
        echo "Cheque enviado, total: " . $quantidade;
    }
    
}
