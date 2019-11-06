<?php
/**
 * Created by PhpStorm.
 * User: haykelbr
 * Date: 04/11/19
 * Time: 11:23
 */
// Autoload Core Libraries
spl_autoload_register(function($className){
    if (file_exists('../app/libraries/' . $className . '.php')){
        require_once '../app/libraries/' . $className . '.php';
    }elseif (preg_match('|^(?:[A-Z][a-z]+)+Repository|', $className)){
        require_once '../app/Repository/' . $className . '.php';
    }elseif (preg_match('|^(?:[A-Z][a-z]+)+Helper|', $className)){
        require_once '../app/helpers/' . $className . '.php';
    }else{
        die('AUTOLOAD: Class not found.');

    }
});
