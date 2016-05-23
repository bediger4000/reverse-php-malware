<?php
$arg1 = '/.*/e';
$arg2 = 'echo "something";';
$arg3 = strrev('ba');
preg_replace($arg1, $arg2, $arg3);
