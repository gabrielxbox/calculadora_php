<?php
/* aqui tras uma estancia de uma classe
  require_once 'classes/calculadora.php';


aqui é para pecupera o numero do fortmulario ou do front end 

$numero1 = $_POST['numero1'];

a qui é uma estancia para cria em memoria o objeto cauculadora

*/




require_once 'classes/Calculadora.php';


$numero1 = $_POST['numero1'];

$numero2 = $_POST['numero2'];

echo $operacao = $_POST['operacao'];

$calculadora = new Calculadora();

// setar valores 

$calculadora->setNumero1($numero1);
$calculadora->setNumero2($numero2);
// estancia de um metodo

//chamando todos metodos  no php nao é feito aqui vai escolher os metodos que vai vim para fazer a operaçao com switch

switch ($operacao) {
	case 'somar':
		$calculadora->somar();

		break;

    case 'subitrair':
             $calculadora->subitrair();
    		break;	
    case 'multiplicar':
    	$calculadora->multiplicar();
    	break;
	case 'dividir':
		$calculadora->dividir();
		break;
       
}




echo $calculadora->getTotal();

?>