<?php


namespace AYakovlev\Core;


use AYakovlev\Model\User;

class App extends User
{
    public function __construct()
    {
    }

    public function run()
    {
        // разобрать запрос
        $request = new Request();

        // создать контроллер
        $controllerName = $request->getController();
        $controller = new $controllerName();

        // вызвать у него метод из команды
        $method = $request->getMethod();
        $controller->$method();
    }
}