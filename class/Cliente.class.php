<?php

//nome da classe precisa ser igual ao nome do arquivo
class Cliente {

    //Criar os artributos
    public $nome;
    public $cpf;
    public $saldo;
    public $valor;
    public $limite;
    public $nConta;

    //deckarar os métodos

    function setClass($nome,$cpf,$saldo,$limite,$nConta){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->saldo = $saldo;
        $this->limite = $limite;
        $this->nConta = $nConta;

        // return "
        // Dados clientes <br>
        // Cliente: {$nome} <br>
        // Saldo: {$saldo} <br>
        // Limite: {$limite} <br>
        // Número da conta: {$nConta} <br>
        // <hr>
        // ";

    }


    function sacar($valor){
        if ($valor > $this->saldo + $this->limite){
            echo "Sem limite de saldo para este valor <br>";
            
        }else{
            $this->saldo = $this->saldo - $valor;
        }
        

    }

    function saldo(){
        echo "Saldo de {$this->saldo} da conta  {$this->nConta} <br>";

    }

    function depositar($valor){
        $this->saldo = $this->saldo + $valor;

    }

    function transferir(){

    }

}

?>