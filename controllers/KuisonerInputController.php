<?php

namespace app\controllers;

use app\models\Kuisoner;
use app\models\KuisonerUser;
use app\models\KuisonerUserSearch;
use hscstudio\mimin\models\AuthAssignment;
use hscstudio\mimin\models\User;
use Yii;
use yii\helpers\ArrayHelper;

class KuisonerInputController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('begin');
    }

    public function actionInput()
    {
        // var_dump(Yii::$app->request->post("User")['id']);
        // die();
        if (Yii::$app->request->post()) {

            if ($currentKuisoner = KuisonerUser::deleteAll([
                'user_id' => Yii::$app->user->getId(),
                'lecturer_id' => Yii::$app->request->post("User")['id']]));

            foreach (Yii::$app->request->post() as $key => $value) {
                if (strpos($key, 'answer') !== false) {
                    $questionId = explode("_", $key);
                    $user_answer = new KuisonerUser();
                    $user_answer->user_id = Yii::$app->user->getId(); 
                    $user_answer->kuisoner_id =  $questionId[1];
                    $user_answer->lecturer_id = Yii::$app->request->post("User")['id'];
                    $user_answer->answer =  $value; 
                    $user_answer->save();
                }
            }
            return $this->redirect(['index']);
            // var_dump(Yii::$app->request->post('id'));
            // echo 'input';
            // die();
        }
        $searchModel = new KuisonerUserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $allQuestion = Kuisoner::find()->all();
        $model = new User();
        $list_lecturer = AuthAssignment::find()->where([
            'item_name'=> 'Lecture'])->asArray()->all();
            // ArrayHelper::map(KuisonerKategori::find()->asArray()->all(),'id','nama');
        
        foreach($list_lecturer as $l) {
            $list[] = ArrayHelper::map(User::find()->where(['id'=>$l['user_id']])->asArray()->all(),'id','username');
        }
            
        // var_dump($list);
        // die();
        return $this->render('input', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'allQuestion' => $allQuestion,
                'list_lecturer' => $list,
                'model' => $model
        ]);
        
    }

    

}
