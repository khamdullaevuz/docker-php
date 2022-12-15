<?php

namespace Config;
use PDO;

class Core
{
    const APP_NAME = "MVC";

    const HOSTNAME = "mvc_db";
    const DBNAME = "docker-php";
    const USERNAME = "user";
    const PASSWORD = "secret";

    const PORT = 3306;
    const OPTIONS = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
}