<?php

require 'enviroment.php';

define("BASE_URL", "http://nomedoseuprojeto.com");
global $config;
$config = array();
if(ENVIROMENT == "development"){
    $config['dbname'] = 'loja';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else {
    $config['dbname'] = 'loja';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

