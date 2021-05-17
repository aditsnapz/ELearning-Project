<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Kuisoner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kuisoner-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kuisoner_kategori_id')->widget(Select2::className(), [
        'data' => $list_kategori,
        'options' => ['placeholder' => 'Change'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'pertanyaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'n1')->textInput() ?>

    <?= $form->field($model, 'n2')->textInput() ?>

    <?= $form->field($model, 'n3')->textInput() ?>

    <?= $form->field($model, 'n4')->textInput() ?>

    <?= $form->field($model, 'n5')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
