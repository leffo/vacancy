<?php


namespace AYakovlev\Controller;


use AYakovlev\Core\View;
use AYakovlev\Model\Article;

class BlogController extends AbstractController
{

    public function index(): void
    {
        echo "Index";
    }

    public function articles()
    {
        $data = Article::getAll();
        View::render("articles", $data);
    }

}