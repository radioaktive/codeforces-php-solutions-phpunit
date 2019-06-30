<?php
//
namespace Src\Solutions\c200_B_3; // do not upload this row to codeforces.com
//
/*
// Interface of codeforces.com

$data1 = (int) trim(fgets(STDIN));
$data2 = preg_split("/ /", trim(fgets(STDIN)));

$main = new MainClass;

echo $main->solution($data1, $data2);

// End of interface
*/

class MainClass {
	// 200В.Drinks
	public $problemLink = 'https://codeforces.com/problemset/problem/200/B';
	public $submissionLink = 'https://codeforces.com/contest/200/submission/56235721';

	public function solution($n, $arrayOfStrings)
	{
		$sum = 0;
			foreach ($arrayOfStrings as $value) {
    		$sum += $value;
			}
		return $sum / $n;
	}
}
