<?php

// incluir usuario e senha para acesso do db
$config = [];
$config['db']['host'] = 'localhost';
$config['db']['username'] = '';
$config['db']['password'] = '';
$config['db']['dbname'] = 'ecommerce';
$config['db']['driver'] = 'mysql';
$config['db']['port'] = '3306';

return $config;