<?php

if(file_exists(__DIR__ . '/../.env')) {
    $dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/..');
    $dotenv->load();
}

$dbopts = parse_url(getenv('DATABASE_URL'));

$dbname = ltrim($dbopts["path"],'/');

return [
    'class' => 'yii\db\Connection',
    'dsn' => "pgsql:host={$dbopts['host']};port={$dbopts['port']};dbname={$dbname}",
    'username' => $dbopts["user"],
    'password' => $dbopts["pass"],
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
