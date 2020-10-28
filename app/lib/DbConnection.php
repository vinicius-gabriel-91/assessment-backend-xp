<?php

class DbConnection extends PDO
{
    public function __construct(array $dbSettings)
    {
        $dns = sprintf(
            "%s:host=%s;port=%d;dbname=%s",
            $dbSettings['driver'],
            $dbSettings['host'],
            $dbSettings['port'],
            $dbSettings['schema']
        );

        parent::__construct($dns, $dbSettings['username'], $dbSettings['password']);
    }
}