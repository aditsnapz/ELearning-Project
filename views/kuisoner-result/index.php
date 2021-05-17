<?php

use app\models\Kuisoner;
use app\models\KuisonerKategori;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use app\models\Profiling;
use app\models\ProfilingCategory;
use app\models\User;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Result Kuisoner');
$this->params['breadcrumbs'][] = $this->title;
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<div class="course-index text-center">
    <h2><?= $is_tested? 'Anda Telah Mengisikan Kuisoner': 'Anda Belum Mengisikan Kuisoner'?></h2>
    
   

<?php if ($is_tested) {?>
<div class="row">
    
        <?php foreach ($summary as $key => $sum) {
            echo '<div class="col-sm-6 text-center">';
            echo '<canvas id="chart'.$key.'" style="position: relative; height:100vh; width:200vw"';
            $cat = [] ;
            $ans = [];
            foreach ($sum as $category => $answer) {
                $cat[] = KuisonerKategori::findOne($category)->nama;
                $ans[] = $answer;
            }
            $data = KuisonerKategori::findOne($key);
            $user = User::findOne($key);
            
            echo '</div>';
        ?>
    
</div>
<script>
console.log(<?= json_encode($ans)?>);
var ctx = document.getElementById("<?='chart'.$key?>").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?= json_encode($cat)?>,
        datasets: [{
            label: '# <?=$data.$key." ".$user->username;?> Score',
            data: <?= json_encode($ans)?>,
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
<?php }}?>

</div>