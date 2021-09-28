<?php

namespace App\Http;

use App\db\DbModel;

;

/**
 * Class UserModel
 *
 * @author  Ifeanyichukwu John <ifeanyichukwujohn70@gmail.com>
 * @package johncode/mvc_design
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}