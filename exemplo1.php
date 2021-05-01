<?php
interface iCerveja {

	public function setMarca(string $marca);
	public function getMarca();
}

class Cerveja implements iCerveja{

	protected $marca;
	protected $nome;
	public $quantidade = 23;

	public function setMarca( string $marca ): bool
	{
		$this->marca = $marca;
		return true;
	}

	public function getMarca(): string
	{
		return $this->marca;
	}
}// VVV para baixo está fora da classe VVV

class Stout extends Cerveja {

	private $torraMalte;

	public function setTorra( int $nivel): bool
	{
		$this->torraMalte = $nivel;
		return true;
	}
} 

class CervejasEscuras {

	private $objStout;

	public function __construct($objStout){

		echo "\nConstrutor executado!\n";

		$this->objStout = $objStout;
	}

	public function servir(){

	}

	public function __destruct(){
		echo "\nDestrutor executado!\n";		
	}
}

class Garcon {

	private $nome;

	public function pegarPedido(){

	}
	public function tirarDuvidas(){

	}
	public function servirCervejasEscuras($objCervejasEscuras){

		$objCervejasEscuras->sevir();
	}
}

$guinness = new Stout;

$guinness->setMarca('Guinness');

$degCervejasEscuras = new CervejasEscuras($guinness);

$james = new Garcon;

echo "\n\nA marca é " . $guinness->getMarca() . "\n\n";

unset($degCervejasEscuras);

echo "\n\nAinda executando\n\n";
