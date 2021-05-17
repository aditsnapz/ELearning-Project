<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KuisonerUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kuisoner-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'lecturer_id')->textInput() ?>

    <?= $form->field($model, 'answer')->textInput() ?>

    <?= $form->field($model, 'kuisoner_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
