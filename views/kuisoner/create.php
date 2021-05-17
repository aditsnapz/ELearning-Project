<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kuisoner */

$this->title = 'Create Kuisoner';
$this->params['breadcrumbs'][] = ['label' => 'Kuisoners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuisoner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'list_kategori' => $list_kategori,
    ]) ?>

</div>
