<?php
// Controle de Estoque de um produto
//nome da classe precisa ser igual ao nome do arquivo
class Estoque {

    //Criar os artributos
    public $idproduto;
    public $nome;
    public $estoque;


    //deckarar os métodos

    function setClass($idproduto,$nome,$estoque){
        $this->idproduto = $idproduto;
        $this->nome = $nome;
        $this->estoque = $estoque;


        // return "
        // Dados clientes <br>
        // Cliente: {$nome} <br>
        // Saldo: {$saldo} <br>
        // Limite: {$limite} <br>
        // Número da conta: {$nConta} <br>
        // <hr>
        // ";

    }


    function vender($qtd){
        if ($qtd > $this->estoque){
            echo "Limite de estoque atingido <br>";
            
        }else{
            $this->estoque = $this->estoque - $qtd;
        }
        

    }

    function saldo(){
        echo "Estoque de {$this->estoque} unidades do produto  {$this->nome} com id: {$this->idproduto} <br>";

    }

    function comprar($qtd){
        $this->estoque = $this->estoque - $qtd;

    }

    function transferir(){

    }

}

?>