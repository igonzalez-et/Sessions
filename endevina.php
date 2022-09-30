<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina4 41</title>
</head>
<body>
    <p>Endevina el nombre</p>
    
    <?php

        session_start();
        if(!isset($_GET['endevina'])){
            $_SESSION['ocult'] = rand(1,100);
            echo "
            <form>
                <label>Endevina</label>
                <input type='number' name='endevina'>
                <input type='submit'>
            </form>";
        }
        else{
            if($_SESSION['ocult'] > $_GET['endevina']){
                echo "<p>El numero a endevinar es major</p>";
                echo "
                <form>
                    <label>Endevina</label>
                    <input type='number' name='endevina'>
                    <input type='submit'>
                </form>";
            }
            else if($_SESSION['ocult'] < $_GET['endevina']){
                echo "<p>El numero a endevinar es menor</p>";
                echo "
                <form>
                    <label>Endevina</label>
                    <input type='number' name='endevina'>
                    <input type='submit'>
                </form>";
            }
            else{
                echo "<p>Felicitats, has endevinat el numero!</p>";
                echo"<a href='ex41pagina4.php'>Torna a jugar</a>";
            }
        }
        

    ?>
</body>
</html>