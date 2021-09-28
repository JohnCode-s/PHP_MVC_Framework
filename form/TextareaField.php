<?php

namespace App\form;


/**
 * Class TextareaField
 *
 * @author  Ifeanyichukwu John <ifeanyichukwujohn70@gmail.com>
 * @package johncode/mvc_design
 */
class TextareaField extends BaseField
{
    public function renderInput()
    {
        return sprintf('<textarea class="form-control%s" name="%s">%s</textarea>',
             $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->attribute,
            $this->model->{$this->attribute},
        );
    }
}