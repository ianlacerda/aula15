<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Estoque</title>
</head>
<body>
    <?php 
        //faz a requisição da classe cliente para ser usada
        require('./class/Estoque.class.php');

        //criar o objeto com base na classe
        $p1 = new Estoque();
        echo $p1->setClass(1,"Maça Verde",5000);
        $p1->vender(500);
        $p1->saldo();
        $p1->vender(4000);
        $p1->saldo();
        $p1->vender(500);
        $p1->saldo();
        $p1->vender(500);
        $p1->saldo();


        
 

    
    
    ?>
</body>
</html>