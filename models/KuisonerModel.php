<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kuisoner".
 *
 * @property int $id
 * @property string $pertanyaan
 * @property int $1
 * @property int $2
 * @property int $3
 * @property int $4
 * @property int $5
 * @property string $created_at
 * @property string $updated_at
 */
class KuisonerModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kuisoner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pertanyaan', '1', '2', '3', '4', '5', 'created_at', 'updated_at'], 'required'],
            [['1', '2', '3', '4', '5'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['pertanyaan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pertanyaan' => 'Pertanyaan',
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
