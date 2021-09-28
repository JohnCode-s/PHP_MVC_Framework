<?php
/**
 * User: TheCodeholic
 * Date: 7/25/2020
 * Time: 11:43 AM
 */

namespace App\exception;


/**
 * Class NotFoundException
 *
 * @author  Ifeanyichukwu John <ifeanyichukwujohn70@gmail.com>
 * @package johncode/mvc_design
 */
class NotFoundException extends \Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}