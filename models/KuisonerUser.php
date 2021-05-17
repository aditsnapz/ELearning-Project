<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kuisoner_user".
 *
 * @property int $id
 * @property int $user_id
 * @property int $lecturer_id
 * @property int $answer
 * @property int $kuisoner_id
 */
class KuisonerUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kuisoner_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'lecturer_id', 'answer', 'kuisoner_id'], 'required'],
            [['user_id', 'lecturer_id', 'answer', 'kuisoner_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'lecturer_id' => 'Lecturer ID',
            'answer' => 'Answer',
            'kuisoner_id' => 'Kuisoner ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id'=>'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKuisoner()
    {
        return $this->hasOne(Kuisoner::className(), ['id'=>'kuisoner_id']);
    }
}
