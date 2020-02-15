<?php

session_start();
ob_start();

define("ABSOLUTE_PATH", $_SERVER["DOCUMENT_ROOT"]."/online-shop");
define("LOG", ABSOLUTE_PATH."/app/config/log.txt");

zabeleziPristupStranici();

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}

function zabeleziPristupStranici(){
    $open = fopen(LOG, "a");
    if($open){
        $date = date('d-m-Y H:i:s');
        fwrite($open, "{$_SERVER['REQUEST_URI']}\t{$date}\t{$_SERVER['REMOTE_ADDR']}\t\n");
        fclose($open);
    }
}

spl_autoload_register('autoload');
