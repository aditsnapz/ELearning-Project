<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kuisoner".
 *
 * @property int $id
 * @property int $kuisoner_kategori_id
 * @property string $pertanyaan
 * @property int $n1
 * @property int $n2
 * @property int $n3
 * @property int $n4
 * @property int $n5
 */
class Kuisoner extends \yii\db\ActiveRecord
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
            [['kuisoner_kategori_id', 'pertanyaan'], 'required'],
            [['kuisoner_kategori_id', 'n1', 'n2', 'n3', 'n4', 'n5'], 'integer'],
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
            'kuisoner_kategori_id' => 'Kuisoner Kategori ID',
            'pertanyaan' => 'Pertanyaan',
            'n1' => 'N1',
            'n2' => 'N2',
            'n3' => 'N3',
            'n4' => 'N4',
            'n5' => 'N5',
        ];
    }

    public function getKuisonerKategori()
    {
        return $this->hasOne(KuisonerKategori::className(), ['id' => 'kuisoner_kategori_id']);
    }

    
}
