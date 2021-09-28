<?php

namespace App\middlewares;

use App\Http\Application;
use App\exception\ForbiddenException;

/**
 * Class AuthMiddleware
 *
 * @author  Ifeanyichukwu John <ifeanyichukwujohn70@gmail.com>
 * @package johncode/mvc_design
 */
class AuthMiddleware extends BaseMiddleware
{
    protected array $actions = [];

    public function __construct($actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}