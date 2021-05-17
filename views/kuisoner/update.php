<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kuisoner */

$this->title = 'Update Kuisoner: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kuisoners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kuisoner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'list_kategori' => $list_kategori,
    ]) ?>

</div>
