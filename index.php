<?php
// получается при инициализации приложения
$config = require ('config.ini.php');
$adapter = new Adapter($config);

$adapter->select('test_table');

