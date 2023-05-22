<?php

$config = [
    'host' => 'localhost',
    'name' => 'testsystem',
    'user' => 'root',
    'password' => 'root',
    'charset' => 'utf-8',
];

$db = new PDO ('mysql:host=' . $config['host'] . ';dbname=' . $config['name'], $config['user'], $config['password']);
$db->query('SET character_set_connection = ' . $config['charset'] . ';');
$db->query('SET character_set_client = ' . $config['charset'] . ';');
$db->query('SET character_set_results = ' . $config['charset'] . ';');