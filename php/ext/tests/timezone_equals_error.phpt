--TEST--
IntlTimeZone equals handler: error test
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
$tz2 = intltz_get_gmt();
var_dump($tz, $tz2);
try {
var_dump($tz == $tz2);
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
object(IntlTimeZone)#2 (4) {
  ["valid"]=>
  bool(true)
  ["id"]=>
  string(3) "GMT"
  ["rawOffset"]=>
  int(0)
  ["currentOffset"]=>
  int(0)
}
string(9) "Exception"
string(63) "Comparison with at least one unconstructed IntlTimeZone operand"
==DONE==
