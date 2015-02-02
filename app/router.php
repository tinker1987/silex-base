<?php
/**
 * Routes config
 * Created by PhpStorm.
 * User: tinker
 * Date: 30.01.15
 * Time: 7:16
 */


// home
$app->mount('/', new \Controllers\HomeController());

// user
$app->mount('/user', new \Controllers\UserController());