<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina2 41</title>
</head>
<body>
    <p>Nombre Enregistrat</p>
    <?php
        session_start();
        $_SESSION['ocult'] = $_GET['ocult'];

    ?>
    <a href="ex41pagina3.php">Endevinar</a>
</body>
</html>