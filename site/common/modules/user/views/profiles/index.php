<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

if (isset($model->name)) {
    $name = $model->name;
} else {
    $name = Yii::$app->user->identity->username;
}

$this->title = Yii::t('app', $name);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profiles-index">

    <?php if ($model) : ?>
        <div class="users-profile-view">
            <div class="row">
                <div class="col-sm-8">
                    <?php if (!empty($model)) : ?>
                        <h3><?= $model->surname ?>
                            <?= $model->name ?>
                            <?= $model->middle_name ?>
                        </h3>
                        <p>
                            <?= Html::a('Редактировать профиль', ['update'], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Смена пароля', ['/user/request-password-reset'], ['class' => 'btn btn-primary']) ?>
                        </p>
                    <?php else : ?>
                        <h2><?= $this->title ?></h2>
                    <?php endif; ?>
                </div>
                <div class="col-sm-4">
                    <?php if (!empty($model->image)) : ?>
<!--                        <a href="--><?//= Url::to('/profile/upload/') ?><!--">-->
<!--                            --><?//= \yii\helpers\Html::img(Url::to('@uploads/images/' . $model->user_id . '/' . $model->image),
//                                [
//                                    'alt' => 'Image not found',
//                                    'class' => 'profile-photo'
//                                ]) ?>
<!--                        </a>-->
                    <?php else : ?>
<!--                        <a href="--><?//= Url::to('/profile/upload/') ?><!--">-->
<!--                            --><?//= \yii\helpers\Html::img(Url::to('@frontend/uploads/images/noImage.jpg'),
//                                [
//                                    'alt' => 'Image not found',
//                                    'class' => 'profile-photo'
//                                ]) ?>
<!--                        </a>-->
                    <?php endif; ?>
                </div>
            </div>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    [
                        'attribute' => 'user_id',
                        'value' => function ($model) {
                            return \common\modules\user\models\User::findOne($model->user_id)->username;
                        }
                    ],
                    [
                        'attribute' => 'email',
                        'value' => function ($model) {
                            return \common\modules\user\models\User::findOne($model->user_id)->email;
                        }
                    ],
                    'surname',
                    'name',
                    'middle_name',
                    'created_at:date',
                    'updated_at:date',
                ],
            ]) ?>

        </div>
    <?php else : ?>
        <h2>empty</h2>
        <?= Html::a('Create', ['/user/profiles/create'], ['class' => 'btn btn-success']) ?>
    <?php endif; ?>


</div>
