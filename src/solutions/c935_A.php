<?php
//
namespace Src\Solutions\c935_A; // do not upload this row to codeforces.com
//
/*
// Interface of codeforces.com
$main = new MainClass;

fscanf(STDIN, "%d", $n);

echo $main->solution($n);
// End of interface
*/

class MainClass {
	public $problemLink = 'https://codeforces.com/problemset/problem/935/A';
	public $submissionLink = 'https://codeforces.com/contest/935/submission/55655398';

	public function solution($n){
		$res = 0;
		for ($i=1; $i<$n; $i++){
			if ($n % $i === 0){
				$res++;
			}
		}
	return $res;
	}
}
