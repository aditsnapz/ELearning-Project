<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use app\models\Profiling;
use app\models\ProfilingCategory;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Kuisoner Input');
$this->params['breadcrumbs'][] = $this->title;
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<div class="course-index text-center">
    <h2><?= 'Mulai Mengisikan Kuisoner'?></h2>
    <p>
        <?= Html::a('Begin Kuisoner', ['input'], ['class' => 'btn btn-success']) ?>
    </p>



</div>