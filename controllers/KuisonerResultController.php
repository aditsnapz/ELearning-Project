<?php

namespace app\controllers;

use app\models\KuisonerKategori;
use app\models\KuisonerUser;
use Yii;

class KuisonerResultController extends \yii\web\Controller
{
    public function actionIndex()
    {
        // $user_test = $this->findModel();
        $is_tested = false;
        $test_result = KuisonerUser::find((Yii::$app->user->id))->all();
        if ($test_result !== null) {
            $is_tested = true;

            foreach ($test_result as $i =>$result) {
                $category[] = $result->kuisoner->kuisoner_kategori_id; 
                $hitung[$result->lecturer_id][$result->kuisoner->kuisoner_kategori_id][] = $result->answer;
                

                
                $summary[$result->lecturer_id][$result->kuisoner->kuisoner_kategori_id] = array_sum ($hitung[$result->lecturer_id][$result->kuisoner->kuisoner_kategori_id]);
            }

            // foreach($summary as $key => $sum) {
            //     $summary2[$key] = $key->answer; 
            // }
            // print_r($test_result);

            // $summary = array_count_values(array_column($test_result, 0));

        }
        // foreach ($summary as $key => $sum) {
           
        //     $cat = [] ;
        //     $ans = [];
            
        //     foreach ($sum as $category => $answer) {
        //         $cat[] = KuisonerKategori::findOne($category)->nama;
        //         $ans[] = $answer;
        //     }
        //     var_dump($key);
        //     $data = KuisonerKategori::findOne($key);
            
            
        // }
        // var_dump($summary);
        // die();
        return $this->render('index', [
            'is_tested' => $is_tested, 
            'test_result' => $test_result,
            'summary' => $summary
        ]);
    }

}
