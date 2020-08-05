<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error text-center">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= Html::a(Yii::t('app', 'home'), '/', ['class'=>'btn btn-default btn-lg'])?>
</div>
