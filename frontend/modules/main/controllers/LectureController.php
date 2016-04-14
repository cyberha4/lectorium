<?php

namespace frontend\modules\main\controllers;

use Yii;
use common\models\Lecture;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;



class LectureController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $where = ['status'=>Lecture::STATUS_PUBLISHED,
                 'type'=>Lecture::TYPE_BIOGRAPHY];
        $where = ArrayHelper::merge($where, Yii::$app->request->get());
        
        $dataProvider = new ActiveDataProvider([
            'query' => Lecture::find()->where($where)
                ->orderBy('created_at DESC'),
            'pagination' => ['pageSize' => 10],
        ]);


        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionView($id = null)
    {
        $model = $this->findModel($id);

        return $this->render('view', [
            'model' => $model,
        ]);

    }

    protected function findModel($id)
    {
        $model = Lecture::findOne([
                'id' => $id,
                'status' => Lecture::STATUS_PUBLISHED,
            ]);

        if ($model !== null) {
            return $model;
        } 
        throw new NotFoundHttpException('The requested page does not exist.');

    }

}
