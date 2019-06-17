<?php

use Src\Solutions\c996_A\MainClass;

class c996_A_Test extends PHPUnit_Framework_TestCase {
	public function setUp()
	{
		$this->main = new MainClass;
		echo $this->main->problemLink.PHP_EOL;
	}


	public function inputData()
	{
		$input1 = 125;
		$output1 = 3;

		$input2 = 43;
		$output2 = 5;

		$input3 = 1000000000;
		$output3 = 10000000;

		return [
			[$input1, $output1],
			[$input2, $output2],
			[$input3, $output3],
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
