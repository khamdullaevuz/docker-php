<?php

namespace Config;
use PDO;

class Core
{
    const APP_NAME = "MVC";

    const HOSTNAME = "192.168.31.119";
    const DBNAME = "docker-php";
    const USERNAME = "user";
    const PASSWORD = "secret";
    const OPTIONS = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
}