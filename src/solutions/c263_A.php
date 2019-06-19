<?php
//
namespace Src\Solutions\c263_A; // do not upload this row to codeforces.com
//
/*
// Interface of codeforces.com
$data1 = [];
for ($i = 0; $i<5; $i++){
	array_push($data1, trim(fgets(STDIN)));
}

$main = new MainClass;

echo $main->solution($data1);

// End of interface
*/

class MainClass {
	public $problemLink = 'https://codeforces.com/problemset/problem/263/A';
	public $submissionLink = 'https://codeforces.com/problemset/submission/263/55725801';

	function convertToMatrix($arrayOfStrings)
	{
		$matrix = [];
		foreach($arrayOfStrings as $value) {
			$matrixRow = preg_split("/ /", $value);
			foreach ($matrixRow as &$row) {
					$row = (int)$row;
			}
			array_push($matrix, $matrixRow);
		}
		return $matrix;
	}

	function findOne ($matrix)
	{
		$res['x'] = null;
		$res['y'] = null;
			for($y = 0; $y < count($matrix); $y++){
				for($x = 0; $x < count($matrix[$y]); $x++){
					if ($matrix[$y][$x] === 1){
						$res['x'] = $x;
						$res['y'] = $y;
					}
				}
			}
			return $res;
	}

	public function solution($arrayOfStrings)
	{
		$matrix = $this->convertToMatrix($arrayOfStrings);
		$coordinates = $this->findOne($matrix);
		$deltaX = abs(2 - $coordinates['x']);
		$deltaY = abs(2 - $coordinates['y']);
		return $deltaX + $deltaY;
	}

}
