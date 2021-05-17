<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kuisoner_kategori".
 *
 * @property int $id
 * @property string $nama
 * @property string $bobot
 * @property string $atribut
 */
class KuisonerKategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kuisoner_kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'bobot', 'atribut'], 'required'],
            [['nama'], 'string', 'max' => 64],
            [['bobot'], 'string', 'max' => 4],
            [['atribut'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'bobot' => 'Bobot',
            'atribut' => 'Atribut',
        ];
    }
}
