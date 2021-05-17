<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KuisonerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kuisoners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuisoner-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kuisoner', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'kuisoner_kategori_id',
                'value' => 'kuisonerKategori.nama'
            ],
            'pertanyaan',
            'n1',
            'n2',
            'n3',
            'n4',
            'n5',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
