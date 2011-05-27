<?php

/*if (extension_loaded('xdebug')) {
    xdebug_disable();
}*/

$phpunitPath = dirname(realpath(__FILE__));
chdir($phpunitPath);
require_once $phpunitPath .'/PHPUnit/Framework.php';

?>