<?php

namespace Vox\Treinamento\Tdd;


class Calculadora
{
	
	public function verificaNumero($numero)
	{
		return gettype($numero);
	}
	
	public function soma($a , $b)
	{
		return $a + $b;
	}
	 
	public function subtracao($a , $b)
	{
		return $a - $b;
	}
	
	public function divisao($dividendo ,$divisor)
	{
		if (! $divisor) {
			throw new \InvalidArgumentException('O Dividendo deve ser maior que zero.');
		}
		if ( $divisor < 0) {
			throw new \InvalidArgumentException('O Dividendo não pode ser numero negativos.');
		}
		return $dividendo / $divisor;
	}
	/**
	 * 
	 * @param unknown $a
	 * @param unknown $b
	 * @return number
	 */
	public function multiplicacao($a , $b)
	{
		return $a * $b;
	}
	
	public function somaLogica($a , $b)
	{
		return $a && $b;
	}
}