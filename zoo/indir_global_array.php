<?php
$fnames = array('base64_encode', 'serialize', 'ignore_user_abort');
function fun1($arg1)
{
    $var1 = $GLOBALS['fnames'][0](   // base64_encode
		fun2(
			$GLOBALS['fnames'][1]($arg1) // serialize
		)
	);
}
