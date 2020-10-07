<?php


namespace AYakovlev\Controller;


use AYakovlev\Core\EmailSender;
use AYakovlev\Core\Request;
use AYakovlev\Core\UsersAuthService;
use AYakovlev\Core\View;
use AYakovlev\Exception\InvalidArgumentException;
use AYakovlev\Model\User;
use AYakovlev\Model\UserActivationService;

class UsersController extends AbstractController
{

    public function signUp()
    {
        if (!empty($_POST)) {
            try {
                $user = User::signUp($_POST);
            } catch (InvalidArgumentException $e) {
                View::render('signup', ['error' => $e->getMessage()]);
                return;
            }

            if ($user instanceof User) {
                $code = UserActivationService::createActivationCode($user);
                EmailSender::send($user, 'Активация', 'userActivation.php', [
                    'userId' => $user->getId(),
                    'code' => $code
                ]);

                View::render('signUpSuccessful');
                return;
            }
        }
        View::render('signup', []);
    }

    public function activate()
    {
        $user = User::getById(Request::$params[3]);
        $isCodeValid = UserActivationService::checkActivationCode($user, Request::$params[4]);
        if ($isCodeValid) {
            $user->activate();
            View::render('activateSuccessful', []);
        }
    }

    public function login()
    {
        if (!empty($_POST)) {
            try {
                $user = User::login($_POST);
                UsersAuthService::createToken($user);
                header('Location: /');
                exit();
            } catch (InvalidArgumentException $e) {
                View::render('login', ['error' => $e->getMessage()]);
                return;
            }
        }

        View::render('login');
    }

    public function logOut()
    {
        setcookie('token', '', -1, '/', '', false, true);
        header('Location: /');
    }
}
