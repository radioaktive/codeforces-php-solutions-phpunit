<?php
//
namespace Src\Solutions\c978_B; // do not upload this row to codeforces.com
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
	// 978В.File name
	public $problemLink = 'https://codeforces.com/problemset/problem/978/B';
	public $submissionLink = 'https://codeforces.com/problemset/submission/978/56258332';

	public function solution($n, $string)
	{
		$res=0;
		for ($i=0; $i<$n; $i++){
			if (substr($string, $i-1, 3) === 'xxx'){
				$res++;
			}
		}
		return $res;
	}
}
