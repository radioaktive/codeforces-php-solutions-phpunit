<?php
//
namespace Src\Solutions\c996_A_2; // do not upload this row to codeforces.com
//
/*
// Interface of codeforces.com
$main = new MainClass;

fscanf(STDIN, "%d", $n);

echo $main->solution($n);
// End of interface
*/

class MainClass {
	//996-A. Hit the Lottery
	public $problemLink = 'https://codeforces.com/problemset/problem/996/A';
	public $submissionLink = 'https://codeforces.com/contest/996/submission/55680588';

	public function solution($n){
		$denominations = [1, 5, 10, 20, 100];
		$res = 0;
		foreach (array_reverse($denominations) as $value){
			$intQuotient = intval($n/$value);
			$currentReminder = $n % $value;
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
