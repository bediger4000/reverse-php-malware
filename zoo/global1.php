<?php
$g = 'bm93IGlzIHRoZSB0aW1l';
function f($a, $b, $c)
{
	global $g;
	$x = base64_decode($g);
	return $a + $b + $c;
}
