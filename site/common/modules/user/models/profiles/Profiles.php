<?php

namespace common\modules\user\models\profiles;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "profiles".
 *
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string|null $surname
 * @property string|null $name
 * @property string|null $middle_name
 * @property string|null $image
 * @property int $created_at
 * @property int $updated_at
 */
class Profiles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profiles';
    }


    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'email'], 'required'],
            [['user_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['email', 'surname', 'name', 'middle_name', 'image'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'id'),
            'user_id' => Yii::t('app', 'user id'),
            'email' => Yii::t('app', 'email'),
            'surname' => Yii::t('app', 'surname'),
            'name' => Yii::t('app', 'name'),
            'middle_name' => Yii::t('app', 'middle name'),
            'image' => Yii::t('app', 'image'),
            'created_at' => Yii::t('app', 'created at'),
            'updated_at' => Yii::t('app', 'updated at'),
        ];
    }
}
