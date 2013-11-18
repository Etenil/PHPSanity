<?php

define('SRC_ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src');
define('SRC_NAMESPACE', 'etenil\\Sanity');

// PSR-0 autoloader for the tests.
function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, str_replace(SRC_NAMESPACE, '', $namespace)) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require (SRC_ROOT . DIRECTORY_SEPARATOR . strtolower($fileName));
}

spl_autoload_register('autoload');
