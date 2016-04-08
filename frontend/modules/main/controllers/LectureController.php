<?php

namespace frontend\modules\main\controllers;

use Yii;

class LectureController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	print_r_(Yii::$app->request->get());

        //return $this->render('index');
    }

}
