
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Calculator</title>
    </head>
    <body>
        <span>Hello from <b><em>PHP/HTML</em></b></span>
        <?php
        $n1 = $_REQUEST["n1"];
        $n2 = $_REQUEST["n2"];
        $op = $_REQUEST["op"];
        $equ = 0;
        $opS = "";
        if ($op == "s") {
            $equ = $n1 + $n2;
            $opS = "suma";
        } else {
            if ($op == "r") {
                $equ = $n1 - $n2;
                $opS = "resta";
            } else {
                if ($op == "m") {
                    $equ = $n1 * $n2;
                    $opS = "multiplicación";
                } else {
                    if ($op == "d") {
                        $equ = $n1 / $n2;
                        $opS = "división";
                    } else {
                        echo "operador incorrecto";
                    }
                }
            }
        }
        $signo = "";
        if ($equ > 0) {
            $signo = "positivo";
            ?>
            <div>
                <img src="img/happy-face.jpg">
            </div>   
            <?php
        } else {
            $signo = "negativo";
            ?>
            <div>
                <img src="img/sad-face.png">
            </div>
        <?php 
        }
        ?>
        <div>
            <span>La operación seleccionada fue: <b><?php echo $opS; ?></b> , cuyo resultado es :<b><?php echo $equ; ?></b> y el signo es: <b><?php echo $signo; ?></b>   </span>
        </div>
           
    </body>
</html>