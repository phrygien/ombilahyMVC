<?php

namespace ombilahy\core;

class Router
{
    public function __construct()
    {

    }

    protected  array $routes = [];

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        echo '<pre>';
        var_dump($_SERVER);
        echo '</pre>';

        exit;
    }
}