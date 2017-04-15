<?php
session_start();
ini_set('display_errors', 1);
// Константы:

define ('DIRSEP', DIRECTORY_SEPARATOR);

// Узнаём путь до файлов сайта

$site_path = realpath(dirname(__FILE__) . DIRSEP . '..' . DIRSEP) . DIRSEP;

define ('site_path', $site_path);

require_once 'app/app.php';