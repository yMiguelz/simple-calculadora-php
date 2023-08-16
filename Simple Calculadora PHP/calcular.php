<?php

require_once "classes/calcular.php";

$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];
$operacao = $_POST['operacao'];

$calculadora = new Calculadora();

<?php echo "Resultado: ".$_GET["total"]  ?>

$calculadora->setNumero1($numero1);
$calculadora->setNumero2($numero2);
switch($operacao){
    case "somar":
        $calculadora->somar();
        break;
    case "subtrair":
        $calculadora->subtrair();
        break;
    case "dividir":
        $calculadora->dividir();
        break;
    case "multiplicar":
        $calculadora->multiplicar();
        break;
		
		
}