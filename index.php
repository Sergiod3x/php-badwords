<!-- 
    Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall’utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
    Tutto ciò che volete provare in più nel vostro codice inseritelo in un file bonus.php
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php 
            //  Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza.
            $par1 = 'Ciao Simone segreto, il segreto deve rimanere segreto!<br>';
            $lunghezza = strlen($par1);
            echo "La stringa ha {$lunghezza} caratteri<br/>";
            

            //Una parola da censurare viene passata dall’utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
            $censura = $_GET["name"];
            $str2 = str_ireplace($censura, '***', $par1);
            echo "<br/>{$str2}";
        ?>


    </h1>

    
    
</body>
</html>
