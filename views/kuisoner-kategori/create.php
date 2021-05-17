<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KuisonerKategori */

$this->title = 'Create Kuisoner Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Kuisoner Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuisoner-kategori-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
