<?php

namespace Config;
use PDO;

class Core
{
    const APP_NAME = "MVC";

    const HOSTNAME = "localhost";
    const DBNAME = "docker-php";
    const USERNAME = "root";
    const PASSWORD = "secret";
    const OPTIONS = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
}