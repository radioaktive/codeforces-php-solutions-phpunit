<?php

use Src\Solutions\c200_B_3\MainClass;

class c200_B_3_Test extends PHPUnit_Framework_TestCase {
	public function setUp()
	{
		$this->main = new MainClass;
		echo $this->main->problemLink.PHP_EOL;
	}


	public function inputData()
	{
		$input1 = [3, ['50', '50', '100']];
		$output1 = 66.666666666667;

		$input2 = [4, ['0', '25', '50', '75']];
		$output2 = 37.500000000000;
		/*
		$input1 = [3, [50, 50, 100]];
		$output1 = 66.666666666667;

		$input2 = [4, [0, 25, 50, 75]];
		$output2 = 37.500000000000;
		*/

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
