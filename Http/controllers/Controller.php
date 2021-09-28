<?php


namespace App\Http\controllers;

use App\Http\Application;
use App\middlewares\BaseMiddleware;

/**
 * Class Controller
 *
 * @author  Ifeanyichukwu John <ifeanyichukwujohn70@gmail.com>
 * @package johncode/mvc_design
 */
class Controller
{
    public string $layout = 'main';
    public string $action = '';


    protected array $middlewares = [];

    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }

    public function render($view, $params = []): string
    {
        return Application::$app->router->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}