<?php


namespace App\exception;


/**
 * Class ForbiddenException
 *
 * @author  Ifeanyichukwu John <ifeanyichukwujohn70@gmail.com>
 * @package johncode/mvc_design
 */
class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}