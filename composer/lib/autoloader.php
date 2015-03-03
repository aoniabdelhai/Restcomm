<?php

define('RESTCOMM_LIB_BASE_DIR', __DIR__);

function restcommAutoloader($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';

    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName .= str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }

    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    $fileName = RESTCOMM_LIB_BASE_DIR.DIRECTORY_SEPARATOR.$fileName;

    require_once $fileName;
}

spl_autoload_register('restcommAutoloader', true, true);