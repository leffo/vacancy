<?php

require '../vendor/autoload.php';

use AYakovlev\Core\App;
use AYakovlev\Core\View;
use AYakovlev\Exception\DbException;
use AYakovlev\Exception\UnauthorizedException;
use AYakovlev\Exception\InvalidArgumentException;

try {
    $app = new App();
    $app->run();
} catch (DbException $e) {
    View::render("500", (array) $e->getMessage(), 500);
} catch (InvalidArgumentException $e) {
    View::render('401', ['error' => $e->getMessage()], 401);
} catch (UnauthorizedException $e) {
    View::render('401', ['error' => $e->getMessage()], 401);
} catch (Exception $e) {
    echo $e->getMessage();
}

