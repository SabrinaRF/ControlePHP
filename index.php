<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Controle Remoto</title>
    </head>
    <body>
        <h1>Projeto Controle Remoto</h1>
        <?php
            require_once 'ControleRemoto.php';
            $controle1= new ControleRemoto();
            $controle1->ligar();
            $controle1->maisVolume(25);
            $controle1->abrirMenu();
        ?>
    </body>
</html>
