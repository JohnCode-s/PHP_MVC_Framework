<?php

namespace App\Http;


/**
 * Class Response
 *
 * @author  Ifeanyichukwu John <ifeanyichukwujohn70@gmail.com>
 * @package johncode/mvc_design
 */
class Response
{
    public function statusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect($url)
    {
        header("location: $url");
    }
}