--TEST--
Bug #62915: cloning of several classes is defective
--SKIPIF--
<?php if( !extension_loaded( 'intl' ) ) print 'skip';
if (!defined('PHP_VERSION_ID') || PHP_VERSION_ID < 50300) die('skip for PHP >= 5.3');
?>
--FILE--
<?php
class A extends IntlDateFormatter {
		static $ARGS = array("en_US" ,IntlDateFormatter::FULL, IntlDateFormatter::FULL,
		    'America/Los_Angeles', IntlDateFormatter::GREGORIAN);
}
class B extends NumberFormatter {
		static $ARGS = array('de_DE', NumberFormatter::DECIMAL);
}
class C extends MessageFormatter {
		static $ARGS = array("en_US", "foo");
}
class D extends Spoofchecker {
		static $ARGS = array();
}

foreach (range('A', 'D') as $subclass) {
		$rc = new ReflectionClass($subclass);
			$obj = $rc->newInstanceArgs($subclass::$ARGS);
				$clone = clone $obj;
					var_dump(get_class($clone));
}
--EXPECT--
string(1) "A"
string(1) "B"
string(1) "C"
string(1) "D"
