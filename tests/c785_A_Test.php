<?php

use Src\Solutions\c785_A\MainClass;

class c785_A_Test extends PHPUnit_Framework_TestCase {
	public function setUp()
	{
		$this->main = new MainClass;
		echo $this->main->problemLink.PHP_EOL;
	}


	public function inputData()
	{
		$input1 = ['4', ['Icosahedron', 'Cube', 'Tetrahedron', 'Dodecahedron']];
		$output1 = 42;

		$input2 = ['3', ['Dodecahedron', 'Octahedron', 'Octahedron']];
		$output2 = 28;


		return [
			[$input1[0], $input1[1], $output1],
			[$input2[0], $input2[1], $output2]
		];
	}

	/**
	*@dataProvider inputData
	*/
	public function testSolution($x, $y, $outp)
	{
		$solutionResult = $this->main->solution($x, $y);
		echo " ".PHP_EOL;
		echo $solutionResult.PHP_EOL;
		$this->assertEquals($outp, $solutionResult);
	}

}
