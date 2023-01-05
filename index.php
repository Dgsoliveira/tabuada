<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Tabuada Online</title>
</head>

<body>
    <header>
        <h1>Tabuada Online</h1>
    </header>
    

    <form method="POST">
        <input type="tel" name="value">

        <button type="submit" class="buttonVerificar" name="verificar">Verificar</button>


    </form>
    <!--inclui o arquivo e a funcao que processa os valores inseridos e retorna a tabuada-->
    
        <div class="tabuada">
        <?php
        include('tabuada.php');
        calculadora();
        ?>
    </div>
</body>

</html>