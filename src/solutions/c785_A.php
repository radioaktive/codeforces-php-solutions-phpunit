<?php
//
namespace Src\Solutions\c785_A; // do not upload this row to codeforces.com
//
/*
// Interface of codeforces.com

$data1 = (int) trim(fgets(STDIN));
$data2 = [];
for ($i = 0; $i<$data1; $i++){
	array_push($data2, trim(fgets(STDIN)));
}

$main = new MainClass;

echo $main->solution($data1, $data2);

// End of interface
*/

class MainClass {
	public $problemLink = 'https://codeforces.com/problemset/problem/785/A';
	public $submissionLink = 'https://codeforces.com/contest/785/submission/55656742';

	public function solution($n, $s)
	{
		$res = 0;
			for($i = 0; $i < $n; $i++){
				switch ($s[$i]) {
					case 'Tetrahedron':
						$res = $res + 4;
						break;
					case 'Cube':
						$res = $res + 6;
						break;
					case 'Octahedron':
						$res = $res + 8;
						break;
					case 'Dodecahedron':
						$res = $res + 12;
						break;
					case 'Icosahedron':
						$res = $res + 20;
						break;
				}
			}
			return $res;
	}

}
