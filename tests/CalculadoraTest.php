<?php

namespace Vox\Treinamento\Tdd\Tests;


class CalculadoraTest extends AbstractFizzBuzzTestCase
{
	public function testverificaNumero()
	{
		$calculadora = new \Vox\Treinamento\Tdd\Calculadora();
		$this->assertEquals($calculadora->verificaNumero(1), "integer");
		$this->assertEquals($calculadora->verificaNumero(true), "boolean");
	}
	
	public function testSoma()
	{
		$calculadora = new \Vox\Treinamento\Tdd\Calculadora();
		$this->assertEquals($calculadora->soma(1 , 1), 2);
		$this->assertEquals($calculadora->soma(1 , -1), 0);
		$this->assertEquals($calculadora->soma(-25.5 , -25.5), -51);
		$this->assertEquals($calculadora->soma(-25.5 , 25.5), 0);
		$this->assertEquals($calculadora->soma(0 , 25.5), 25.5);
		$this->assertEquals($calculadora->soma(12 , -25.5), -13.5);
		
	} 
	
	public function testSubtracao()
	{
		$calculadora = new \Vox\Treinamento\Tdd\Calculadora();
		$this->assertEquals($calculadora->subtracao(4 , 2), 2);
		$this->assertEquals($calculadora->subtracao(0 , 2.36), -2.36);
		$this->assertEquals($calculadora->subtracao(0 , -2.36), 2.36);
		$this->assertEquals($calculadora->subtracao(2.36 , 5), -2.64);
		
	}
	
	/**
	 * @expectedException \InvalidArgumentException
	 */
	public function testDivisaoPorZero()
	{
		$calculadora = new \Vox\Treinamento\Tdd\Calculadora();
		$this->assertEquals($calculadora->divisao(4 , 0), 2);
		$this->assertEquals($calculadora->divisao(4 ,-1), 2);
	}
	
	/**
	 * @expectedException \InvalidArgumentException
	 */
	public function testDivisaoPorNegativo()
	{
		$calculadora = new \Vox\Treinamento\Tdd\Calculadora();
		$this->assertEquals($calculadora->divisao(4 ,-1), 2);
	}
	
	public function testDivisao()
	{
		$calculadora = new \Vox\Treinamento\Tdd\Calculadora();
		$this->assertEquals($calculadora->divisao(4 , 2), 2);
		$this->assertEquals($calculadora->divisao(15 , 2), 7.5);
	}
	
	
	public function testMultiplicacao()
	{
		$calculadora = new \Vox\Treinamento\Tdd\Calculadora();
		$this->assertEquals($calculadora->multiplicacao(4 , 2), 8);
	}
	
	public function testsomaLogica()
	{
		$calculadora = new \Vox\Treinamento\Tdd\Calculadora();
		$this->assertEquals($calculadora->somalogica(true , true), true);
		$this->assertEquals($calculadora->somalogica(true , false), false);
		$this->assertEquals($calculadora->somalogica(false , false), false);
		$this->assertEquals($calculadora->somalogica(false , true), false);
	}
	
	
	
}