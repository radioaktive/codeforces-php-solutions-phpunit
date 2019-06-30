<?php
//
namespace Src\Solutions\c200_B; // do not upload this row to codeforces.com
//
/*
// Interface of codeforces.com

$data1 = (int) trim(fgets(STDIN));
$data2 = trim(fgets(STDIN));

$main = new MainClass;

echo $main->solution($data1, $data2);

// End of interface
*/

class MainClass {
	// 200В.Drinks
	public $problemLink = 'https://codeforces.com/problemset/problem/200/B';
	public $submissionLink = 'https://codeforces.com/contest/200/submission/56234259';

	public function solution($n, $string)
	{
		$arrayOfStrings = preg_split("/ /", $string);
		$sum = 0;
			for($i = 0; $i < $n; $i++){
				$sum = $sum + (int)$arrayOfStrings[$i];
			}
			return $sum / $n;
	}
}
