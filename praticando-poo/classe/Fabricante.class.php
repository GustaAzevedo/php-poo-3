<?php

require('../interface/fabricante.interface.php'); 
require_once( './abstract/TipoPessoa.class.php');

Class Fabricante extends TipoPessoa implements iFabricante {

	public function setDados( array $dados):bool
	{
		
	}

	public function getDados( int $id_fabricante):array
	{
		
	}
}