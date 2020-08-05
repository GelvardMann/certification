<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\user\models\profiles\Profiles */

$this->title = Yii::t('app', 'create profiles');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'profiles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profiles-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
