<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Gerador de frases </title>
</head>
<body>

    <h1>
    <?php 
    if(isset($_GET['dia'])){
        echo($frase);
    }
    ?>
    </h1>

    <form action = "gerador_frases.php" method = "GET">

        <label for = "letra"> Digite a primeira letra do seu nome: </label>
        <input type = "text" name = "letra"><br><br>
        <label for = "mes"> Digite o mês do seu nascimento: </label>
        <input type = "text" name = "mes"><br><br>
        <label for = "dia"> Digite o dia do nascimento: </label>
        <input typ = "text" name = "dia"><br><br>
        <input type = "submit">

    </form>

</body>
</html>