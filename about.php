<?php

session_start();

require_once __DIR__ . "/includes/config.php";
require_once ROOT . "/includes/function.php";
require_once ROOT . "/includes/db.php";

$title = "О нас";

require_once VIEWS . "/about.tpl.php";