<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $frase = $_POST["frase"];
        $valore = $_POST["valore"];
        intval($valore);
        if($valore == 4){
            if(!isset($_SESSION["valoreMassimo"])) {
                $_SESSION["valoreMassimo"] = 0;
            }else{
                $_SESSION["valoreMassimo"]++;
            }
        }
        if
        echo "<p>Valore massimo : $_SESSION[valoreMassimo] </p>";
    ?>
</body>
</html>