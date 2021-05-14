<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Medidor de Safadeza </title>
</head>
<body>

    <form action="medidor_safadeza.php" method="GET">

        <label for ="dia"> Digite o dia do seu nascimento: </label>
        <input type="text" name="dia"><br><br>
        <label for ="mes"> Digite o mês do seu nascimento: </label>
        <input type="text" name="mes"><br><br>
        <label for ="ano"> Digite o ano do seu nascimento (Exemplo: 2003 = 03): </label>
        <input type="text" name="ano"><br><br>
        <input type="submit">

    </form>

    <p> Nível de safadeza:
    <?php
    if (isset($_GET['dia'])){
        echo(safadao($dia, $mes, $ano));
    } 
    ?>
    </p>

</body>
</html>