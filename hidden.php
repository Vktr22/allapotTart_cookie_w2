<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $szamlalo =0;
            if(isset($_POST["szamlalo"])){
                $szamlalo = (int)$_POST["szamlalo"];
            }
            echo "A számláló értéke: $szamlalo";
            $szamlalo++;
        
        
        ?>
        <form method="post">
            <input type="hidden" name="szamlalo" value=<?php echo "$szamlalo"?>>
            <input type="submit" value="Növelés">
        </form>
</body>
</html>