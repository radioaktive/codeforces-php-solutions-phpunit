<?php

use Src\Solutions\c263_A\MainClass;

class c263_A_Test extends PHPUnit_Framework_TestCase {
	public function setUp()
	{
		$this->main = new MainClass;
		echo $this->main->problemLink.PHP_EOL;
	}


	public function inputData()
	{
		$input1 =
		[
			'0 0 0 0 0',
			'0 0 0 0 1',
			'0 0 0 0 0',
			'0 0 0 0 0',
			'0 0 0 0 0'
		];
		$output1 = 3;
		$input2 =
		[
			'0 0 0 0 0',
			'0 0 0 0 0',
			'0 1 0 0 0',
			'0 0 0 0 0',
			'0 0 0 0 0'
		];
		$output2 = 1;

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
