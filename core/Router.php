<?php

namespace ombilahy\core;
use ombilahy\core\Request;

class Router
{
    public Request $request;
    protected  array $routes = [];

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if($callback === false)
        {
            echo "Not found";
        }
        echo '<pre>';
        var_dump($callback);
        echo '</pre>';
    }
}