<?php
$schema = file_get_contents('./db/schema.sql');
$seed = file_get_contents('./db/seed.sql');
if (!file_exists('database.db')) {
    $database = new PDO('sqlite:' . DB_FILE);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->exec($schema);

    $database->exec($seed);
}