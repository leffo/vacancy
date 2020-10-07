<?php


namespace AYakovlev\Controller;


use AYakovlev\Core\UsersAuthService;
use AYakovlev\Core\View;
use AYakovlev\Model\User;

abstract class AbstractController
{
    /** @var View */
    protected View $view;

    /** @var User|null */
    protected ?User $user;

    public function __construct()
    {
        $this->user = UsersAuthService::getUserByToken();
        $this->view = new View();
        $this->view->setVar('user', $this->user);
   }

}