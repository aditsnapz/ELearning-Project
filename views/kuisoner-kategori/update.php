<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KuisonerKategori */

$this->title = 'Update Kuisoner Kategori: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kuisoner Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kuisoner-kategori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
