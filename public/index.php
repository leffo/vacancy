<?php

require '../vendor/autoload.php';

use AYakovlev\Core\App;
use AYakovlev\Core\View;
use AYakovlev\Exception\DbException;

try {
    $app = new App();
    $app->run();
} catch (DbException $e) {
    View::render("500", (array) $e->getMessage(), 500);
} catch (Exception $e) {
    echo $e->getMessage();
}
