<?php

use Src\Solutions\c935_A\MainClass;

class c935_A_Test extends PHPUnit_Framework_TestCase {
	public function setUp()
	{
		$this->main = new MainClass;
		echo $this->main->problemLink.PHP_EOL;
	}


	public function inputData()
	{
		$input1 = 2;
		$output1 = 1;

		$input2 = 10;
		$output2 = 3;

		return [
			[$input1, $output1],
			[$input2, $output2]
		];
	}

	/**
	*@dataProvider inputData
	*/
	public function testSolution($x, $outp)
	{
		$solutionResult = $this->main->solution($x);
		echo " ".PHP_EOL;
		echo $solutionResult.PHP_EOL;
		$this->assertEquals($outp, $solutionResult);
	}

}
