<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Creare una variabile $domanda in cui è presente la seguente stringa "Qual è il pianeta più vicino al sole?"
        // Creare un array di stringhe $risposte con i seguenti elementi: Venere, Terra, Marte, Mercurio, Giove.
        // Stampare un paragrafo contenente il testo della domanda, che deve essere in corsivo ed in grassetto.
        // Stampare le risposte alla domanda, utilizzando gli elementi <input type="radio">
        // Accanto ad ogni casella deve esserci il testo della domanda e poi bisogna andare a capo.
        
        // L'attributo name di ogni radio button deve avere lo stesso valore per fare in modo che sia possibile selezionare solo 
        // uno degli elementi. In questo caso, dare come valore di name la stringa "risposta"
        $domanda="Qual è il pianeta più vicino al sole?";
        $risposte= array("venere","terra","marte","mercurio","giove");
        echo "<p><b><i>$domanda</i></b></p>";
        foreach ($risposte as $elem){
            echo "<input type='radio' name='risposta' value=$elem><span>$elem</span><br>";
        }

    ?>
</body>
</html>