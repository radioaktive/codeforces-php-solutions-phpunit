<?php
//
namespace Src\Solutions\c617_A; // do not upload this row to codeforces.com
//
/*
// Interface of codeforces.com
$main = new MainClass;

fscanf(STDIN, "%d", $n);

echo $main->solution($n);
// End of interface
*/

class MainClass {
	//617-A. Elephant
	public $problemLink = 'https://codeforces.com/problemset/problem/617/A';
	public $submissionLink = 'https://codeforces.com/contest/617/submission/55748164';

	public function solution($n){
		$res = 0;
		for ($i = 5; $i>0; $i--){
			$intQuotient = (int)($n/$i);
			$currentReminder = $n % $i;
			if ($intQuotient > 0){
				$res = $res + $intQuotient;
			};
			if ($currentReminder === 0){
				break;
			};
			if ($currentReminder > 0){
				$n = $currentReminder;
			};
		}
		return $res;
	}
}
