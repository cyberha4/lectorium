<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller
{
	public $layout = 'test2';
	
    public function actionIndex()
    {
        return $this->render('index');
    }

}
