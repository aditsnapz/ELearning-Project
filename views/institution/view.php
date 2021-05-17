<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Institution */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Institutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="institution-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Add Instructor', ['instructor', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',   
            'name',
            // 'slug',
            'description:ntext',
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>
    <br>
    <h3>Instructors</h3>
    <?php 
    // $url = str_replace("institution", "institution-instructor", $url);
     ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'institution.name',
            'user.username',
            'created_at:datetime',
            // 'updated_at:datetime',

            // ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{delete}',
                'buttons' => [
                    'delete' => function($url, $model) {
                    return Html::a('<span class="btn btn-sm btn-danger"><b class="fa fa-trash"></b></span>', 
                        ['institution-instructor/delete', 'id' => $model['id']], 
                        [
                            'title' => 'Delete', 
                            'class' => 'btn-danger', 
                            'data' => [
                                'confirm' => 'Are you absolutely sure ? You will lose all the information about this user with this action.', 
                                'method' => 'post', 
                            ],
                        ]);
                    }
                ],
            ],
        ],
    ]); ?>

</div>
