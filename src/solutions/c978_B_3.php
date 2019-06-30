<?php
//
namespace Src\Solutions\c978_B_3; // do not upload this row to codeforces.com
//
/*
// Interface of codeforces.com

$data1 = (int) trim(fgets(STDIN));
$data2 = str_split(trim(fgets(STDIN)), 1);


$main = new MainClass;

echo $main->solution($data1, $data2);

// End of interface
*/

class MainClass {
	// 978В.File name
	public $problemLink = 'https://codeforces.com/problemset/problem/978/B';
	public $submissionLink = 'https://codeforces.com/contest/978/submission/56261491';

	public function solution($n, $arrayOfStrings)
	{
		$res=0;
		$counter=0;
		foreach ($arrayOfStrings as $value){
			if ($value === 'x'){
				$counter++;
			} else {
				$counter=0;
			}
			if($counter>2){
				$res++;
			}
		}
		return $res;
	}
}
