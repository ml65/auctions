<?php

namespace Mls65\Lotlist;

use Mls65\Lotlist\Engine\Request;
use Mls65\Lotlist\Engine\Router;
use Mls65\Lotlist\Engine\Storage;

class App {

    /**
     * @var Router
     */
    private $router;

    public function __construct()
    {
        $this->router = Storage::get('Router');
    }

    public function run()
    {
        $current_request = $this->router->getCurrent();
        $controller = new $current_request->controller;
        $response = $controller->{$current_request->method}();
        $response->render();
    }
}
