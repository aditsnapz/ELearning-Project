<?php

use kartik\widgets\Select2;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Kuisoner Input');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-index">
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->widget(Select2::className(), [
        'data' => $list_lecturer,
        'options' => ['placeholder' => 'Change'],
        'pluginOptions' => [
            'allowClear' => true,
        'name' => 'lecturer_id'
        ],
    ]) ?>
    <?php
        foreach ($allQuestion as $question) {
            echo "<pre>".$question->pertanyaan.'</pre>';
            
            echo '
                <label for="answer1'.$question->n1.'" class="radio-inline">
                    <input type="radio" 
                    id="answer1'.$question->id.'" name="answer_'.$question->id.'" value='.$question->n1.'>Sangat Tidak Sesuai
                </label><br>
                <label for="answer2'.$question->id.'" class="radio-inline">
                    <input type="radio" 
                    id="answer2'.$question->id.'" name="answer_'.$question->id.'" value='.$question->n2.'>Tidak Sesuai
                </label><br>
                <label for="answer3'.$question->id.'" class="radio-inline">
                    <input type="radio" 
                    id="answer3'.$question->id.'" name="answer_'.$question->id.'" value='.$question->n3.'>Cukup Sesuai
                </label><br>
                <label for="answer3'.$question->id.'" class="radio-inline">
                    <input type="radio" 
                    id="answer2'.$question->id.'" name="answer_'.$question->id.'" value='.$question->n4.'>Sesuai
                </label><br>
                <label for="answer3'.$question->id.'" class="radio-inline">
                    <input type="radio" 
                    id="answer5'.$question->id.'" name="answer_'.$question->id.'" value='.$question->n5.'>Sangat Sesuai
                </label>';
           

        }
        // print_r($allQuestion);
    ?>

<div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>