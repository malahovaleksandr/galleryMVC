<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require_once 'vendor/autoload.php';
require_once 'core/model.php';
require_once 'core/controller.php';
require_once 'core/view.php';
require_once 'core/route.php';

include ('models/config.php');
$ner= new PHPMailer();



$capsule = new Capsule;
// это должно быть в config что это тут делает?
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => '',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci'
]);
$capsule->bootEloquent();

Route::start();
