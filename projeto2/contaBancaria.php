<?php
	declare(strict_types=1);

	// 'class' = classe
	class ContaBancaria {
		// Atributos da classe
		// Deve possuir os modificadores de acesso
		// public - private - protected

		/**
		 * @var string
		 */
		private $banco;

		/**
		 * @var string
		 */
		private $nome_titular;

		/**
		 * @var string
		 */
		private $num_agencia;

		/**
		 * @var string
		 */
		private $num_conta;

		/**
		 * @var float
		 */
		private $saldo;

		public function __construct(string $banco, string $nome_titular, string $num_agencia, string $num_conta, float $saldo) {
			// O atributo banco da classe é igual ao atributo passado na função
			$this->banco = $banco;
			// E assim acontecem com os outros atributos
			$this->nome_titular = $nome_titular;
			$this->num_agencia = $num_agencia;
			$this->num_conta = $num_conta;
			$this->saldo = $saldo;
		}

		public function getSaldo() {
			return 'Saldo disponível: R$'.$this->saldo;
		}

		public function depositar(float $valor) : string {
			$this->saldo += $valor;
			return 'Valor depositado: R$'.$valor;
		}

		public function sacar(float $valor) : string {
			// Se o valor de saque for menor que o saldo atual, a pessoa não consegue sacar o dinheiro
			if ($valor <= $this->saldo) {
				$this->saldo -= $valor;
				return 'Valor de saque: R$'.$valor;
			}else{
				return 'Não foi possível sacar R$'.$valor.' do seu saldo atual.';
			}
		}
	}

	// Criando objeto a partir da classe
	$conta = new ContaBancaria('Banco Brasil', 'Vinicius', '1234', '56789-10', 100.00);

	echo $conta->getSaldo();
	echo "<br>";
	echo $conta->depositar(100);
	echo "<br>";
	echo $conta->getSaldo();
	echo "<br>";
	echo $conta->sacar(100);
	echo "<br>";
	echo $conta->getSaldo();
	echo "<br>";
	echo $conta->sacar(150);
	echo "<br>";
	echo $conta->getSaldo();

	// Ver o conteúdo da classe
	// var_dump($conta);	
	// Ver um atributo em expecífico da classe
	// var_dump($conta->nome_titular);	
?>