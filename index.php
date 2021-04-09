<h1> Hola dando pasitos php<h1>

        <?php
        define('minombre', 'Juan Pablo');
        echo '<h2>hola desarrollo utec sitio por defecto</h2>';
        echo '<h2>' . minombre . '</h2>';
        //operadores aritmeticos
        $numero1 = 5;
        $numero2 = 6;
        echo '<h3>Operaciones aritmeticas<h3>';
        echo 'Suma:' . ($numero1 + $numero2) . '<br/>';
        echo 'Resta:' . ($numero1 - $numero2) . '<br/>';
        echo 'Multiplicacion:' . ($numero1 * $numero2) . '<br/>';
        echo 'Division:' . ($numero1 / $numero2) . '<br/>';
        echo 'Resto:' . ($numero1 % $numero2) . '<br/>';
        $opdecremento=2021;
        echo 'vinicial:' . $opdecremento . '<br/>';
        $opdecremento--;//$opdecremento=$opdecremento+1
        echo 'aumento:' . $opdecremento . '<br/>';
        
        ?>


        <?php
  
        echo '<h3>Listado de mejores equipos de futbol del mundo<h3>';

        echo "<ul>"
        . "<li>Barcelona</li>"
        . "<li>Real Madrid</li>"
        . "<li>Alianza</li>"
        . "<li>Aguila</li>"
        . "</ul>";

        ?>

        <?php
        /* variables de diferente tipo */
        $variable_cadena = 234;
        $variable_numero = '35';
        $variable_boolean = false;
        $variable_numero = $variable_numero + "10";
        $decimal = 23.1;
        ?>
        <?php
        /* Mostrando los valores de variables */
        echo '<h3>mis variables<h3>';
        echo "$variable_cadena" . "<br>";

        echo "$variable_numero" . "<br>";
        echo "$decimal";
        