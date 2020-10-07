<?php


namespace AYakovlev\Controller;


class AuthController extends AbstractController
{
    public function index(): void
    {
        setcookie('leff', '12586423', time() + 60*60*24*7);
        echo "cool cookies!";
    }

    public function emailTo(): void
    {
        if (mail('admin@leffo.online', 'Прочти меня!', 'Простая проверка!', 'From: admin@leffo.ru')) {
            echo 'mail sent';
        } else {
            echo 'нету true, не отправилось';
        }
    }

}