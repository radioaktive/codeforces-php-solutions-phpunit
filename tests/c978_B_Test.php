<?php

use Src\Solutions\c978_B\MainClass;

class c978_B_Test extends PHPUnit_Framework_TestCase {
	public function setUp()
	{
		$this->main = new MainClass;
		echo $this->main->problemLink.PHP_EOL;
	}


	public function inputData()
	{
		$input1 = [6, 'xxxiii'];
		$output1 = 1;

		$input2 = [5, 'xxoxx'];
		$output2 = 0;

		$input3 = [10, 'xxxxxxxxxx'];
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
