<?php
// ���������� ��� ������������� ����������
$config = require ('config.ini.php');
$adapter = new Adapter($config);

$adapter->select('test_table');

