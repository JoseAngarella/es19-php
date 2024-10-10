<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $domanda="Qual è il pianeta più vicino al sole?";
        $risposte= array("venere","terra","marte","mercurio","giove");
        echo "<p><b><i>$domanda</i></b></p>";
        foreach ($risposte as $elem){
            echo "<input type='radio' name='risposta' value=$elem><span>$elem</span><br>";
        }

    ?>
</body>
</html>