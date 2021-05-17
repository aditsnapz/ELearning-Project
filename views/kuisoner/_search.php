<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KuisonerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kuisoner-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kuisoner_kategori_id') ?>

    <?= $form->field($model, 'pertanyaan') ?>

    <?= $form->field($model, 'n1') ?>

    <?= $form->field($model, 'n2') ?>

    <?php // echo $form->field($model, 'n3') ?>

    <?php // echo $form->field($model, 'n4') ?>

    <?php // echo $form->field($model, 'n5') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
