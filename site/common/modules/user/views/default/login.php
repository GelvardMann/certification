<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\modules\user\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('app', 'login');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">

    <p><?= Yii::t('app', 'login-message') ?></p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div style="color:#999;margin:1em 0">
                <?= Yii::t('app', 'login-forgot-message') ?>
                <?= Html::a(Yii::t('app', 'reset it'), ['/user/request-password-reset']) ?>.
                <br>
                <?= Yii::t('app', 'need new verification email') ?>
                <?= Html::a(Yii::t('app', 'resend'), ['/user/resend-verification-email']) ?>
            </div>

            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'login'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
