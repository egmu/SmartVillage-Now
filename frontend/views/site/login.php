<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>
<div class="site-login shadow p-5 " style="background: rgba(255, 255, 255, 0);">
    <h1 class="text-center" style="letter-spacing: 10px;"><?= Html::encode($this->title) ?></h1>
    <hr style="border: 1px solid var(--cyan);">
    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox() ?>
        <hr style="border: 1px solid var(--cyan);">

        <div class="row justify-content-center">
                        <div class="form-group">
                            <?= Html::submitButton('Login', ['class' => 'btn bg-cyan', 'name' => 'login-button', 'style' => 'color: white']) ?>
                        </div>
                    </div>        

    <?php ActiveForm::end(); ?>
     <div class="row flex-column text-center" style="margin-bottom: 10px;">
                    Forgot Your Password? <?= Html::a('Reset It', ['site/request-password-reset']) ?>.
                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                </div>
</div>