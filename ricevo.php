<html>
    <body>
        <h1> prodotto aggiunto </h1>

        <?php

        $numero = $_POST ['numero'];
        $massimo = 100;
        $minimo = 0;
        $num = rand($minimo, $massimo);

        $conta = 0;

        if($numero < $num){
            echo "<p>" , "troppo piccolo";
            action = "invio.php";
            $conta ++;
        } else {
            if($numero > $num){
                echo "<p>" , "troppo grande";
                action = "invio.php";
                $conta ++;
            }
            else{
                echo "<p>" , "giusto";
                echo "<p>" ,  $conta , "<p>";
               

            }
        }
        
            echo "<p>" , $numero , "<p>";

        ?>

</body>

</html>
