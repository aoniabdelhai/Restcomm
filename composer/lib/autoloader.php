<?php
define('RESTCOMM_LIB_BASE_DIR', __DIR__.DIRECTORY_SEPARATOR.'Restcomm');

function restcommAutoloader($className)
{
    $className=explode('\\',$className);
    $className=end($className);
    $fileName= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    $fileName = RESTCOMM_LIB_BASE_DIR.DIRECTORY_SEPARATOR.$fileName;

    if(file_exists($fileName))
        require_once $fileName;

}

spl_autoload_register('restcommAutoloader', true, true);