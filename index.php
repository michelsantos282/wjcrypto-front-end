<?php

use Pecee\SimpleRouter\SimpleRouter;

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . '/lib/Helper.php';
require_once __DIR__ . "/lib/Routes/Routes.php";

session_start();

SimpleRouter::start();