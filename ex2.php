<?php
interface People {

	public function enviarCorrespondencia();
	public function receberCorrespondencia();
}

abstract class Pessoa implements People{

	protected $nome;
	protected $endereco;

	public function enviarCorrespondencia(){

		echo "\n\ncarta ------> destino\n\n";
	}

	public function receberCorrespondencia(){
	}
}

class PessoaFisica extends Pessoa {

	private $cpf;
	private $imc;

	public function enviarCorrespondencia(){
		echo "\nvai até a agência dos Correios\n";
		echo "\nFica 45 horas na fila\n";
		echo "\ncarta --------> destino (com sorte)\n";
	}

	public function praticarExercicio(){
	}

	public function comer(){
	}
}

class PessoaJurica extends Pessoa {

	private $cnpj;
	private $nomeFantasia;

	public function abrirFilial(){

	}

	public function fecharFilial(){

	}
}

$joao = new PessoaFisica();

$joao->enviarCorrespondencia();
