<?php
/**
 * Register framework autoload function
 *
 * @category    Erdiko
 * @package     Core
 * @copyright   Copyright (c) 2016, Arroyo Labs, http://www.arroyolabs.com
 * @author      John Arroyo, john@arroyolabs.com
 */

ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . ROOT .
    PATH_SEPARATOR . VENDOR . PATH_SEPARATOR . APPROOT . PATH_SEPARATOR . ERDIKO);


spl_autoload_register(function ($name) {

    // error_log("autoload: $name");

    if (strpos($name, '\\') !== false) {
        $path = str_replace('\\', '/', $name);
        $class = basename($path);
        $dir = '/'.dirname($path);
        $filename = ROOT.$dir.'/'.$class.'.php';
        // error_log("file: $filename");

        if (is_file($filename)) {
            require_once $filename;
            return;
        }
    }
});
