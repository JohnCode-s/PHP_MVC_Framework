<?php

namespace App\middlewares;


/**
 * Class BaseMiddleware
 *
 * @author  Ifeanyichukwu John <ifeanyichukwujohn70@gmail.com>
 * @package johncode/mvc_design
 */
abstract class BaseMiddleware
{
    abstract public function execute();
}