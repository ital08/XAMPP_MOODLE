--TEST--
IntlTimeZone clone handler: error test
--SKIPIF--
<?php
if (!extension_loaded('intl'))
	die('skip intl extension not enabled');
if (!defined('PHP_VERSION_ID') || PHP_VERSION_ID < 50300)
	die('skip for PHP >= 5.3');
--FILE--
<?php
ini_set("intl.error_level", E_WARNING);

class A extends IntlTimeZone {
function __construct() {}
}

$tz = new A();
var_dump($tz);
try {
var_dump(clone $tz);
} catch (Exception $e) {
	var_dump(get_class($e), $e->getMessage());
}

?>
==DONE==
--EXPECT--
object(A)#1 (1) {
  ["valid"]=>
  bool(false)
}
string(9) "Exception"
string(39) "Cannot clone unconstructed IntlTimeZone"
==DONE==
