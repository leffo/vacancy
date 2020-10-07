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
        $id = $request->getId();
        if (isset($id) && $controllerName == "AYakovlev\\Controller\\ArticleController") {
            $controller->setIdArticle($id);
        }
        $controller->$method();
    }
}