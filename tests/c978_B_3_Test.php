<?php

use Src\Solutions\c978_B_3\MainClass;

class c978_B_3_Test extends PHPUnit_Framework_TestCase {
	public function setUp()
	{
		$this->main = new MainClass;
		echo $this->main->problemLink.PHP_EOL;
	}


	public function inputData()
	{
		$input1 = [6, ['x', 'x', 'x', 'i', 'i', 'i']];
		$output1 = 1;

		$input2 = [5, ['x', 'x', 'o', 'x', 'x']];
		$output2 = 0;

		$input3 = [10, ['x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x']];
		$output3 = 8;

		return [
			[$input1[0], $input1[1], $output1],
			[$input2[0], $input2[1], $output2],
			[$input3[0], $input3[1], $output3]
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
