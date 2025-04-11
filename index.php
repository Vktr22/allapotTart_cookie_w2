<?php
    if(!isset($_COOKIE["visits"])){
        $visits = 1;
    }else if(isset($_COOKIE["user"])){
        $visits = $_COOKIE["visits"]+1;
    }else {
        $visits = $_COOKIE["visits"];
    }
    setcookie("visits", $visits, time()+35);
    setcookie("user", "Szabó Ágnes", time()+5);
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie teszt</title>
</head>
<body>
    <?php
        if (isset($_COOKIE["user"])&&isset($_COOKIE["visits"]))
        {
            echo "Üdvözöllek ".$_COOKIE["user"]."!";
            echo "<br>Ez ".$_COOKIE["visits"]." látogatásod.";
        }
        else {
            echo "Üdvözöllek kedves vendég!";
        }
    ?>
</body>
</html>