<?php
$abc = $argv[1];
print(${'a'.'b'.'c'});

$x = array('a', 'b', 'c');
print(${$x[0].$x[1].$x[2]});

$x = array('abc', 'def', 'ghi');
print(${$x[0]});
