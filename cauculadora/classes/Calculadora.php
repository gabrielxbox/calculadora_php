<?php


class Calculadora{

	private $total;

	private $numero1;

	private $numero2;

	function __construct(){
		$this->total   = 0;
		$this->numero1 = 0;
		$this->numero2 = 0;
	
	}



// a qui sao os getter e seter no netbeas e ecipse você nao pressisa fazer
	public function setNumero1($parametro_numero1){
		$this->numero1 = $parametro_numero1;

	}

	public function setNumero2($parametro_numero2){
		$this->numero2 = $parametro_numero2;
	}

   //operaçao
  public function somar(){

  	$this->total = $this->numero1 + $this->numero2;


  }

public function  subitrair(){

	$this->total = $this->numero1 - $this->numero2;
} 

public function multiplicar(){

	$this->total = $this->numero1 * $this->numero2;
}

public function dividir(){

	$this->total = $this->numero1 / $this->numero2;
}

    public function getTotal(){
    	return $this->total;
    }
     
}


?>