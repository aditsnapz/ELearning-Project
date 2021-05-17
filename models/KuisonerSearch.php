<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kuisoner;

/**
 * KuisonerSearch represents the model behind the search form of `app\models\Kuisoner`.
 */
class KuisonerSearch extends Kuisoner
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'n1', 'n2', 'n3', 'n4', 'n5'], 'integer'],
            [['kuisoner_kategori_id','pertanyaan'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Kuisoner::find();
        $query->joinWith(['kuisonerKategori']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'n1' => $this->n1,
            'n2' => $this->n2,
            'n3' => $this->n3,
            'n4' => $this->n4,
            'n5' => $this->n5,
        ]);

        $query->andFilterWhere(['like', 'pertanyaan', $this->pertanyaan]);
        $query->andFilterWhere(['like', 'kuisoner_kategori.nama', $this->kuisoner_kategori_id]);

        return $dataProvider;
    }
}
