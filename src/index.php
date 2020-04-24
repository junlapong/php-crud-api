<?php

namespace Tqdev\PhpCrudApi;

use Tqdev\PhpCrudApi\Api;
use Tqdev\PhpCrudApi\Config;
use Tqdev\PhpCrudApi\RequestFactory;
use Tqdev\PhpCrudApi\ResponseUtils;

require '../vendor/autoload.php';

$config = new Config([
    'driver'   => 'sqlite',
    'address'  => './db/crud.sqlite',
    // 'port'     => 3306,
    'database' => './db/crud.sqlite',
    'username' => 'crud',
    'password' => 'password'
]);
$request = RequestFactory::fromGlobals();
$api = new Api($config);
$response = $api->handle($request);
ResponseUtils::output($response);

/*

sqlite3 ./db/crud.sqlite

CREATE TABLE users (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT NOT NULL);
INSERT INTO users(name) VALUES ('Jman');
SELECT * FROM users;

*/