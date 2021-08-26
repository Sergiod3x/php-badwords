<!-- 

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
            // Tramite la get è possibile decidere se raggruppare i caratteri a gruppi di tre

            $text = "A very long wooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooord. and something";
            $torf = $_GET["torf"];
            if($torf === "true"){
                $torf = true;
            } else{
                $torf= false;
            }
            $newtext = wordwrap($text, 3, "\n", $torf);

            echo "$newtext\n";

            
            echo "<br/> $torf";

        ?>


    </h1>

    
    
</body>
</html>
