<?php
if (getenv("DATABASE_URL")){
    $url = parse_url(getenv("DATABASE_URL"));

    return [
        'class' => 'yii\db\Connection',
        'dsn' => "mysql:host={$url["host"]};dbname=" . substr($url["path"], 1),
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',

        // Schema cache options (for production environment)
        //'enableSchemaCache' => true,
        //'schemaCacheDuration' => 60,
        //'schemaCache' => 'cache',
    ];
}
