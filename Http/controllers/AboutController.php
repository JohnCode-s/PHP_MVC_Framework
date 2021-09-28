<?php

namespace App\Http\controllers;


/**
 * Class AboutController
 *
 * @author  Ifeanyichukwu John <ifeanyichukwujohn70@gmail.com>
 * @package johncode/mvc_design
 */
class AboutController extends Controller
{
    public function index()
    {
        return $this->render('about');
    }
}