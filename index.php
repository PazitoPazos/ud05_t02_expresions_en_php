<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Construción de expresións en PHP</h3>

        <?php
        // Operadores aritméticos
        $x=10;
        $y=3;
        $z=$x*$y;
        echo $x." x ".$y." = ".$z."<br/>";
        $z=$x%$y;
        echo $x." módulo ".$y." = ".$z."<br/>";
        /*Operadores de asignación*/
        $z-=$y;
        echo "\$z-=\$y asigna a \$z".$z."<br/>";
        $z+=$y;
        echo "\$z+=\$x asigna a \$z".$z."<br/>";
        // Operadores de incremento/diminución
        ++$z;
        echo "++\$z asigna a \$z".$z."<br/>";
        $z--;
        echo "\$z-- asigna a \$z".$z."<br/>";
        /*Operadores de comparación*/
        $z=$x!=$y;
        echo "\$x!=\$y devolve ".$z."<br/>";
        $z=$y>$x;
        echo "\$y>\$x devolve ".$z."<br/>";
        // Operadores lóxicos
        $z=($x==10 and $y==3);
        echo "(\$x==10 and \$y==3) devolve ".$z."<br/>";
        $z=($x==10 or $y==5);
        echo "(\$x==10 or \$y==5) devolve ".$z."<br/>";

        // Comentario dende outra máquina
        ?>
    </body>
</html>