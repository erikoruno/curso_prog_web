<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones numéricas</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <header>
        <h3>3.- Funciones numéricas</h3>
    </header>
    <section>
    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["funcion"])) {
        $funcion = $_POST["funcion"];

        switch ($funcion) {
            case 'exp':
                handleExponentialFunction();
                break;
            case 'flo':
                handleFloorFunction();
                break;
            case 'abs':
                handleAbsoluteFunction();
                break;
            case 'cei':
                handleCeiFunction();
                break;
            case 'gra':
                handleGraFunction();
                break;
            case 'max':
                handleMaxFunction();
                break;
            case 'min':
                handleMinFunction();
                break;
            case 'random':
                handleRandomFunction();
                break;
            case 'pi':
                handlePiFunction();
                break;
            case 'pow':
                handlePowFunction();
                break;
            case 'round':
                handleRoundFunction();
                break;
            case 'sqrt':
                handleSqrtFunction();
                break;
                
            default:
                echo "<p>Seleccione una función válida</p>";
                break;
        }
      
    }
    function handleSqrtFunction()
        {
            echo '<h3>Función sqrt</h3>';
            echo '<p>La función sqrt() en PHP se utiliza para calcular la raíz cuadrada de un número. Toma un único argumento, el número del cual deseas calcular la raíz cuadrada, y devuelve el resultado.</p>';

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['valor_sqrt'])) {
                $valor_sqrt = floatval($_POST['valor_sqrt']);
                $resultado = sqrt($valor_sqrt);
                echo "<p>La raíz cuadrada de $valor_sqrt es: $resultado</p>";
            }
        }
    function handleExponentialFunction()
    {
        echo '<h3>Función Exponencial (e^x)</h3>';
        echo '<p>En PHP, puedes utilizar la función exp() para calcular la función exponencial. La función exp() devuelve el valor de e elevado a la potencia de x, donde e es la base del logaritmo natural (aproximadamente 2.71828) y x es el argumento de la función.</p>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['valor_x'])) {
            $valor_x = floatval($_POST['valor_x']);
            $resultado = exp($valor_x);
            echo "<p>El resultado de e^$valor_x es: $resultado</p>";
        }
    }

    function handleFloorFunction()
    {
        echo '<h3>Función Floor</h3>';
        echo '<p>En PHP, la función floor() se utiliza para redondear un número hacia abajo al entero más cercano. Devuelve el valor entero más grande que sea menor o igual al número proporcionado.</p>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['valor_x'])) {
            $valor_x = floatval($_POST['valor_x']);
            $resultado = floor($valor_x);
            echo "<p>El resultado de floor($valor_x) es: $resultado</p>";
        }
    }

    function handleAbsoluteFunction()
    {
        echo '<h3>Función Absoluta</h3>';
        echo '<p>En PHP, la función abs() se utiliza para obtener el valor absoluto de un número, es decir, su distancia respecto al cero en la recta numérica, sin tener en cuenta la dirección.</p>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['valor_x'])) {
            $valor_x = floatval($_POST['valor_x']);
            $resultado = abs($valor_x);
            echo "<p>El valor absoluto de $valor_x es: $resultado</p>";
        }
    }

    function handleCeiFunction()
    {
        echo '<h3>Función ceil</h3>';
        echo '<p>La función ceil() en PHP se utiliza para redondear un número hacia arriba al entero más cercano. Devuelve el valor entero más pequeño que sea mayor o igual al número proporcionado</p>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['valor_x'])) {
            $valor_x = floatval($_POST['valor_x']);
            $resultado = ceil($valor_x);
            echo "<p>El resultado de ceil($valor_x) es: $resultado</p>";
        }
    }

    function handleGraFunction()
    {
        echo '<h3>Función getrandmax</h3>';
        echo '<p>En PHP, la función getrandmax() se utiliza para obtener el valor máximo que puede devolver la función rand() en el sistema en el que se está ejecutando PHP. La función rand() se utiliza para generar números aleatorios, y getrandmax() proporciona el valor máximo posible que se puede generar.</p>';

        $max_rand = getrandmax();
        echo "<p>El valor máximo que puede generar rand() es: $max_rand</p>";
    }

    function handleMaxFunction()
    {
        echo '<h3>Función max</h3>';
        echo '<p>En PHP, la función max() se utiliza para encontrar el valor más grande entre dos o más valores. Puedes proporcionar varios argumentos, y la función devolverá el valor más grande de todos los argumentos dados.</p>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['valores_max']) && !empty($_POST['valores_max'])) {
                
                $valores = explode(",", $_POST['valores_max']);
                
                $valores = array_map('trim', $valores);
                
                $valores = array_filter($valores);

                if (!empty($valores)) {
                    
                    $maximo = max($valores);
                    echo "<p>El valor máximo de los números ingresados es: $maximo</p>";
                } else {
                    echo "<p>Por favor, ingrese al menos un valor.</p>";
                }
            } else {
                echo "<p>Por favor, ingrese al menos un valor.</p>";
            }
        }
    }

    function handleMinFunction()
    {
        echo '<h3>Función min</h3>';
        echo '<p>En PHP, la función min() se utiliza para encontrar el valor más pequeño entre dos o más valores. Puedes proporcionar varios argumentos, y la función devolverá el valor más pequeño de todos los argumentos dados.</p>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['valores_min']) && !empty($_POST['valores_min'])) {
                
                $valores = explode(",", $_POST['valores_min']);
                
                $valores = array_map('trim', $valores);
                
                $valores = array_filter($valores);

                if (!empty($valores)) {
                    
                    $minimo = min($valores);
                    echo "<p>El valor mínimo de los números ingresados es: $minimo</p>";
                } else {
                    echo "<p>Por favor, ingrese al menos un valor.</p>";
                }
            } else {
                echo "<p>Por favor, ingrese al menos un valor.</p>";
            }
        }
    }

    function handleRandomFunction()
    {
        echo '<h3>Función mt_rand</h3>';
        echo '<p>En PHP, la función mt_rand() se utiliza para generar un número entero aleatorio utilizando el generador de números aleatorios Mersenne Twister. Este generador es más rápido y tiene una mejor distribución de números aleatorios que el antiguo generador rand().</p>';

        $random_number = mt_rand(0, mt_getrandmax());
        echo "<p>El número aleatorio generado es: $random_number</p>";
    }

    function handlePiFunction()
    {
        echo '<h3>Función pi</h3>';
        echo '<p>En PHP, la función pi() devuelve el valor de la constante matemática π (pi). Pi es una constante que representa la relación entre la circunferencia de un círculo y su diámetro.</p>';

        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['valor_pi'])) {
            $valor_pi = floatval($_POST['valor_pi']);
            $resultado = pi() * $valor_pi;
            echo "<p>El resultado de pi() multiplicado por $valor_pi es: $resultado</p>";
        }
    }
    function handlePowFunction()
    {
        echo '<h3>Función pow</h3>';
        echo '<p>La función pow() en PHP se utiliza para calcular una potencia. Toma dos argumentos: la base y el exponente, y devuelve el resultado de elevar la base al exponente.</p>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['base_pow']) && isset($_POST['exponente_pow'])) {
                $base_pow = floatval($_POST['base_pow']);
                $exponente_pow = floatval($_POST['exponente_pow']);
                $resultado = pow($base_pow, $exponente_pow);
                echo "<p>El resultado de $base_pow elevado a la $exponente_pow es: $resultado</p>";
            } else {
                echo "<p>Por favor, ingrese la base y el exponente.</p>";
            }
        }
    }

    function handleRoundFunction()
    {
        echo '<h3>Función round</h3>';
        echo '<p>La función round() en PHP se utiliza para redondear un número a la cantidad de decimales especificada (o al entero más cercano si no se proporciona el número de decimales).</p>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['numero_round']) && isset($_POST['decimales_round'])) {
                $numero_round = floatval($_POST['numero_round']);
                $decimales_round = intval($_POST['decimales_round']);
                $resultado = round($numero_round, $decimales_round);
                echo "<p>El resultado de redondear $numero_round a $decimales_round decimales es: $resultado</p>";
            } else {
                echo "<p>Por favor, ingrese el número y la cantidad de decimales.</p>";
            }
        }
    }

    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="funcion">Selecciona la función:</label>
        <select name="funcion" id="funcion" onchange="mostrarCampo()" required>
            <option value="exp">Función Exponencial (e^x)</option>
            <option value="flo">Función Floor</option>
            <option value="abs">Función Absoluta</option>
            <option value="cei">Función ceil</option>
            <option value="gra">Función getrandmax</option>
            <option value="max">Función max</option>
            <option value="min">Función min</option>
            <option value="random">Función mt_rand</option>
            <option value="pi">Función pi</option>
            <option value="pow">Función pow</option>
            <option value="round">Función round</option>
            <option value="sqrt">Función sqrt</option>

           
        </select>

        <br>

        <div id="campo_numeros">
            <label for="valor_x">Ingrese el/los números: </label>
            <input type="text" name="valor_x" id="valor_x" required>
        </div>

        <div id="campo_valores_max" style="display: none;">
            <label for="valores_max">Ingrese valores separados por comas para la función max: </label>
            <input type="text" name="valores_max" id="valores_max">
        </div>

        <div id="campo_valores_min" style="display: none;">
            <label for="valores_min">Ingrese valores separados por comas para la función min: </label>
            <input type="text" name="valores_min" id="valores_min">
        </div>

        <div id="campo_pi" style="display: none;">
            <label for="valor_pi">Ingrese el valor a multiplicar:</label>
            <input type="text" name="valor_pi" id="valor_pi">
        </div>

        <div id="campo_base_pow" style="display: none;">
            <label for="base_pow">Ingrese la base para la función pow: </label>
            <input type="text" name="base_pow" id="base_pow">
        </div>

        <div id="campo_exponente_pow" style="display: none;">
            <label for="exponente_pow">Ingrese el exponente para la función pow: </label>
            <input type="text" name="exponente_pow" id="exponente_pow">
        </div>

        <div id="campo_numero_round" style="display: none;">
            <label for="numero_round">Ingrese el número para la función round: </label>
            <input type="text" name="numero_round" id="numero_round">
        </div>

        <div id="campo_decimales_round" style="display: none;">
            <label for="decimales_round">Ingrese la cantidad de decimales para la función round: </label>
            <input type="text" name="decimales_round" id="decimales_round">
        </div>

        <div id="campo_valor_sqrt" style="display: none;">
            <label for="valor_sqrt">Ingrese el número para la función sqrt: </label>
            <input type="text" name="valor_sqrt" id="valor_sqrt">
        </div>

        <br>

        <input type="submit" value="Calcular">
    </form>

    <script>
        function mostrarCampo() {
            var seleccion = document.getElementById("funcion").value;
            var campoNumeros = document.getElementById("campo_numeros");
            var campoValoresMax = document.getElementById("campo_valores_max");
            var campoValoresMin = document.getElementById("campo_valores_min");
            var campoValorPi = document.getElementById("campo_pi");
            var campoBasePow = document.getElementById("campo_base_pow");
            var campoExponentePow = document.getElementById("campo_exponente_pow");
            var campoNumeroRound = document.getElementById("campo_numero_round");
            var campoDecimalesRound = document.getElementById("campo_decimales_round");
            var campoValorSqrt = document.getElementById("campo_valor_sqrt");
            var inputValorX = document.getElementById("valor_x");

            if (seleccion === "max") {
                campoNumeros.style.display = "none";
                campoValoresMax.style.display = "block";
                campoValoresMin.style.display = "none";
                campoBasePow.style.display = "none";
                campoExponentePow.style.display = "none";
                campoNumeroRound.style.display = "none";
                campoDecimalesRound.style.display = "none";
                campoValorSqrt.style.display = "none";
                inputValorX.setAttribute("disabled", "disabled");
            } else if (seleccion === "min") {
                campoNumeros.style.display = "none";
                campoValoresMax.style.display = "none";
                campoValoresMin.style.display = "block";
                campoBasePow.style.display = "none";
                campoExponentePow.style.display = "none";
                campoNumeroRound.style.display = "none";
                campoDecimalesRound.style.display = "none";
                campoValorSqrt.style.display = "none";
                inputValorX.setAttribute("disabled", "disabled");
            } else if (seleccion === "random") {
                campoNumeros.style.display = "none";
                campoValoresMax.style.display = "none";
                campoValoresMin.style.display = "none";
                campoBasePow.style.display = "none";
                campoExponentePow.style.display = "none";
                campoNumeroRound.style.display = "none";
                campoDecimalesRound.style.display = "none";
                campoValorSqrt.style.display = "none";
                inputValorX.setAttribute("disabled", "disabled");
            } else if (seleccion === "pi") {
                campoNumeros.style.display = "none";
                campoValoresMax.style.display = "none";
                campoValoresMin.style.display = "none";
                campoValorPi.style.display = "block";
                campoBasePow.style.display = "none";
                campoExponentePow.style.display = "none";
                campoNumeroRound.style.display = "none";
                campoDecimalesRound.style.display = "none";
                campoValorSqrt.style.display = "none";
                inputValorX.setAttribute("disabled", "disabled");
            } else if (seleccion === "pow") {
                campoNumeros.style.display = "none";
                campoValoresMax.style.display = "none";
                campoValoresMin.style.display = "none";
                campoBasePow.style.display = "block";
                campoExponentePow.style.display = "block";
                campoNumeroRound.style.display = "none";
                campoDecimalesRound.style.display = "none";
                campoValorSqrt.style.display = "none";
                inputValorX.setAttribute("disabled", "disabled");
            } else if (seleccion === "round") {
                campoNumeros.style.display = "none";
                campoValoresMax.style.display = "none";
                campoValoresMin.style.display = "none";
                campoBasePow.style.display = "none";
                campoExponentePow.style.display = "none";
                campoNumeroRound.style.display = "block";
                campoDecimalesRound.style.display = "block";
                campoValorSqrt.style.display = "none";
                inputValorX.setAttribute("disabled", "disabled");
            } else if (seleccion === "sqrt") {
                campoNumeros.style.display = "none";
                campoValoresMax.style.display = "none";
                campoValoresMin.style.display = "none";
                campoValorPi.style.display = "none";
                campoBasePow.style.display = "none";
                campoExponentePow.style.display = "none";
                campoNumeroRound.style.display = "none";
                campoDecimalesRound.style.display = "none";
                campoValorSqrt.style.display = "block";
                inputValorX.setAttribute("disabled", "disabled");

            } else {
                campoNumeros.style.display = "block";
                campoValoresMax.style.display = "none";
                campoValoresMin.style.display = "none";
                campoBasePow.style.display = "none";
                campoExponentePow.style.display = "none";
                campoNumeroRound.style.display = "none";
                campoDecimalesRound.style.display = "none";
                inputValorX.removeAttribute("disabled");
            }
        }
    </script>

    </section>
    <section class="right-section">

            <form action="funciones4.php" method="post" target="_blank">
                <h3>4.-Funciones de fecha y hora </h3>
                    <button type="button" onclick="abrirNuevaVentana()">Presione para ir:</button>
            </form>
        </section>

        </form>
    </div>
    <footer>
        <h6>Todos los derechos reservados @eriko@</h6>
    </footer>
    <script>
        function abrirNuevaVentana() {
            window.open("funciones4.php");
        }
    </script>
    
</body>
</html>