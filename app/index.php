<?php

//chama o arquivo config para o index
$globalSettings = require_once __DIR__ . '/etc/config.php';

include_once __DIR__ . '/etc/class_loader.php';

$connection = new DbConnection($globalSettings['db']);
