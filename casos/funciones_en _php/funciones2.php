<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de cadena</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h3>2.- Funciones de cadena</h3>
    </header>
    <section>
    
        <form action="funciones2.php" method="post">
            <?php
            error_reporting(0);

            $Cadena1 = $_POST['txtDato1'] ?? '';
            $Cadena2 = $_POST['txtDato2'] ?? '';
            $funcion = $_POST['selCadena'] ?? '';
            $cadena = htmlspecialchars($_POST['txtCadena'] ?? '');

            $selStrlen = ($funcion == 'Strlen') ? 'selected' : '';
            $selStrpos = ($funcion == 'Strpos') ? 'selected' : '';
            $selStrcmp = ($funcion == 'Strcmp') ? 'selected' : '';
            $selStrstr = ($funcion == 'Strstr') ? 'selected' : '';
            $selSubstr = ($funcion == 'Substr') ? 'selected' : '';
            $selTrimFunctions = ($funcion == 'Ltrim' || $funcion == 'Rtrim' || $funcion == 'Chop' || $funcion == 'Trim') ? 'selected' : '';
            $selStrReplace = ($funcion == 'Str_Replace') ? 'selected' : '';
            $selCaseFunctions = ($funcion == 'Strtolower' || $funcion == 'Strtoupper') ? 'selected' : '';
            $selPregMatch = ($funcion == 'Preg_Match') ? 'selected' : '';
            $selExplode = ($funcion == 'Explode') ? 'selected' : '';
            $selStrrev = ($funcion == 'Strrev') ? 'selected' : '';
            $selStrRepeat = ($funcion == 'Str_Repeat') ? 'selected' : '';
            $selStrPad = ($funcion == 'Str_Pad') ? 'selected' : '';
            ?>
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td><h2>Ingrese la cadena: </h2></td>
                    <td>
                        <input type="text" name="txtCadena" value="<?php echo $cadena; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Seleccione una función para la cadena: </td>
                    <td>
                        <select name="selCadena">
                            <option value="Strlen" <?php echo $selStrlen; ?>>Strlen</option>
                            <option value="Strpos" <?php echo $selStrpos; ?>>Strpos</option>
                            <option value="Strcmp" <?php echo $selStrcmp; ?>>Strcmp</option>
                            <option value="Strstr" <?php echo $selStrstr; ?>>Strstr</option>
                            <option value="Substr" <?php echo $selSubstr; ?>>Substr</option>
                            <option value="Ltrim" <?php echo $selTrimFunctions; ?>>Ltrim</option>
                            <option value="Rtrim" <?php echo $selTrimFunctions; ?>>Rtrim</option>
                            <option value="Chop" <?php echo $selTrimFunctions; ?>>Chop</option>
                            <option value="Trim" <?php echo $selTrimFunctions; ?>>Trim</option>
                            <option value="Str_Replace" <?php echo $selStrReplace; ?>>Str_Replace</option>
                            <option value="Strtolower" <?php echo $selCaseFunctions; ?>>Strtolower</option>
                            <option value="Strtoupper" <?php echo $selCaseFunctions; ?>>Strtoupper</option>
                            <option value="Preg_Match" <?php echo $selPregMatch; ?>>Preg_Match</option>
                            <option value="Explode" <?php echo $selExplode; ?>>Explode</option>
                            <option value="Strrev" <?php echo $selStrrev; ?>>Strrev</option>
                            <option value="Str_Repeat" <?php echo $selStrRepeat; ?>>Str_Repeat</option>
                            <option value="Str_Pad" <?php echo $selStrPad; ?>>Str_Pad</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Realizar operación"></td>
                    <td colspan="2" align="center"><input type="reset" value="Refresh"></td>
                </tr>

                <?php
                if (!empty($funcion)) {
                    if ($funcion == 'Strlen') {
                        $resultado = strlen($cadena);
                        echo "<tr><td colspan='2'>La función Strlen devuelve la longitud de la cadena.</td></tr>";

                    } elseif ($funcion == 'Strpos') {
                        $resultado = strpos($cadena, 'buscar');
                        echo "<tr><td colspan='2'>La función Strpos busca la posición de 'buscar' en la cadena.</td></tr>";

                    } elseif ($funcion == 'Strcmp') {
                        $resultado = strcmp($Cadena1, $Cadena2);
                        echo "<tr><td colspan='2'>La función Strcmp compara las cadenas Cadena1 y Cadena2.</td></tr>";

                    } elseif ($funcion == 'Strstr') {
                        $resultado = strstr($cadena, 'buscar');
                        echo "<tr><td colspan='2'>La función Strstr devuelve la parte de la cadena a partir de 'buscar'.</td></tr>";

                    } elseif ($funcion == 'Substr') {
                        $resultado = substr($cadena, 0, 5);
                        echo "<tr><td colspan='2'>La función Substr devuelve una parte de la cadena desde el inicio hasta el quinto carácter.</td></tr>";

                    } elseif ($funcion == 'Ltrim') {
                        $resultado = ltrim($cadena);
                        echo "<tr><td colspan='2'>La función Ltrim elimina los espacios en blanco del lado izquierdo de la cadena.</td></tr>";

                    } elseif ($funcion == 'Rtrim') {
                        $resultado = rtrim($cadena);
                        echo "<tr><td colspan='2'>La función Rtrim elimina los espacios en blanco del lado derecho de la cadena.</td></tr>";

                    } elseif ($funcion == 'Chop') {
                        $resultado = chop($cadena);
                        echo "<tr><td colspan='2'>La función Chop elimina los espacios en blanco del final de la cadena.</td></tr>";

                    } elseif ($funcion == 'Trim') {
                        $resultado = trim($cadena);
                        echo "<tr><td colspan='2'>La función Trim elimina los espacios en blanco del inicio y el final de la cadena.</td></tr>";

                    } elseif ($funcion == 'Str_Replace') {
                        $resultado = str_replace('buscar', 'reemplazar', $cadena);
                        echo "<tr><td colspan='2'>La función Str_Replace reemplaza 'buscar' con 'reemplazar' en la cadena.</td></tr>";

                    } elseif ($funcion == 'Strtolower') {
                        $resultado = strtolower($cadena);
                        echo "<tr><td colspan='2'>La función Strtolower convierte la cadena a minúsculas.</td></tr>";

                    } elseif ($funcion == 'Strtoupper') {
                        $resultado = strtoupper($cadena);
                        echo "<tr><td colspan='2'>La función Strtoupper convierte la cadena a mayúsculas.</td></tr>";

                    } elseif ($funcion == 'Preg_Match') {
                        $patron = '/\d+/';
                        if (preg_match($patron, $cadena)) {
                            $resultado = 'Coincidencia encontrada';
                            echo "<tr><td colspan='2'>La función Preg_Match busca dígitos en la cadena.</td></tr>";
                        } else {
                            $resultado = 'No se encontraron coincidencias';
                            echo "<tr><td colspan='2'>La función Preg_Match no encontró dígitos en la cadena.</td></tr>";
                        }

                    } elseif ($funcion == 'Explode') {
                        $resultado = implode(', ', explode(' ', $cadena));
                        echo "<tr><td colspan='2'>La función Explode divide la cadena en un array usando el espacio como delimitador.</td></tr>";

                    } elseif ($funcion == 'Strrev') {
                        $resultado = strrev($cadena);
                        echo "<tr><td colspan='2'>La función Strrev invierte la cadena.</td></tr>";

                    } elseif ($funcion == 'Str_Repeat') {
                        $resultado = str_repeat($cadena, 3);
                        echo "<tr><td colspan='2'>La función Str_Repeat repite la cadena tres veces.</td></tr>";

                    } elseif ($funcion == 'Str_Pad') {
                        $resultado = str_pad($cadena, 20, '*');
                        echo "<tr><td colspan='2'>La función Str_Pad rellena la cadena con asteriscos hasta alcanzar una longitud de 20 caracteres.</td></tr>";
                    }
                }
                ?>

                <tr>
                    <td>El resultado de la función es: </td>
                    <td><?php echo $resultado; ?></td>
                </tr>
            </table>
        </form>
    </section>

    <section class="right-section">

            <form action="funciones3.php" method="post" target="_blank">
                <h3>3.-Funciones numéricas </h3>
                    <button type="button" onclick="abrirNuevaVentana()">Presione para ir:</button>
            </form>
        </section>

        </form>
    </div>
    <footer>
        <h6>Todos los derechos reservados @JAE@</h6>
    </footer>
    <script>
        function abrirNuevaVentana() {
            window.open("funciones3.php", "_blank");
        }
    </script>
   
</body>
</html>