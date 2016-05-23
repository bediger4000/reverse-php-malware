<?php
function printit($x) { echo $x."\n"; } // A function wrapped around echo built-in

$a = 'printit';
$b = 'a';
$c = 'b';

$a('indirect');
$$b('double indirect');
$$$c('triple indirect');
