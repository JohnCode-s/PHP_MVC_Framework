<?php

/** @var $model \App\models\LoginForm */

use App\form\Form;

?>

<h1>Login</h1>

<?php $form = Form::begin('', 'post') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<div style="display: flex;justify-content:space-between">
    <button class="btn btn-success">Login</button>
    <p>Don't have an account? <a href="/register">Register</a></p>
</div>
<?php Form::end() ?>