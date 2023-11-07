<?php
    $numero="num";
    $valor="";
    $operador="op";
    $valor2="";

    if(isset($_POST['numero'])){
        $num=$_POST['input'].$_POST['numero'];
    }else{
        $num="";
    }if(isset($_POST['operadores'])){
        $valor=$_POST['input'];
        setcookie($numero,$valor);

        $valor2=$_POST['operadores'];
        setcookie($operador,$valor2);
        $num="";

    }
    

    if(isset($_POST['igual'])){
        $num=$_POST['input'];
        switch($_COOKIE["op"]){
            case "+":
                $resultado=$_COOKIE["num"]+$num;
                break;
                case "-":
                    $resultado=$_COOKIE["num"]-$num;
                    break;
                    case "/":
                        $resultado=$_COOKIE["num"]/$num;
                        break;
                        case "*":
                            $resultado=$_COOKIE["num"]*$num;
                            break;
        }
        $num=$resultado;
    }
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora</title>
</head>
<body>
    <form action="calculadora.php" method="post">
    
        <div class="contenedor1"><input type="text" placeholder="ingrese un numero" name="input" value="<?php echo @$num; ?>"id=""></div>
    
        <div class="contenedor">
            <div><button value="1" name="numero">1</button></div>
            <div><button value="2" name="numero">2</button></div>
            <div><button value="3" name="numero">3</button></div>
            <div><button value="4" name="numero">4</button></div>
            <div><button value="5" name="numero">5</button></div>
            <div><button value="6" name="numero">6</button></div>
            <div><button value="7" name="numero">7</button></div>
            <div><button value="8" name="numero">8</button></div>
            <div><button value="9" name="numero">9</button></div>
            <div><button value="0" name="numero">0</button></div>
            <div><button value="+" name="operadores">+</button></div>
            <div><button value="-" name="operadores">-</button></div>
            <div><button value="*" name="operadores">*</button></div>
            <div><button value="/" name="operadores">/</button></div>
            <div><button value="C" name="operadores">C</button></div>
            <div><button value="=" name="igual">=</button></div>
        </div>
    </form>
</body>
</html>