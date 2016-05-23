<?php
$abc = array('one ', 'two ', 'three ', 'four ');
$array_name_chars = array('a', 'b', 'c');
assert(${$array_name_chars[0] . $array_name_chars[1] . $array_name_chars[2]}[1]);
