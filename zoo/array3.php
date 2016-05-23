<?php
$abc = array(10,12,14,'correct value',18);
$arg_array_name = 'abc';
$fname = 'assert';
$fname(${$arg_array_name}[3]);
