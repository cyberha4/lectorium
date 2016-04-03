<?php

namespace frontend\controllers;

use frontend\models\Scientist;
use Yii;

//use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\imagine\Image;

use Imagine\Gd;
use Imagine\Image\Box;
use Imagine\Image\BoxInterface;

class NewController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Cont();
        $post = 'its not post';

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save()) {
            $post = 'its post';

        }

        return $this->render('index', [
            'post' => $post,
            'model' => $model,
        ]);
    }
    public function actionCreate()
    {
        $model = new Scientist ();

        if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($model, 'file');
            if ($file && $file->tempName) {
                $model->file = $file;
                if ($model->validate(['file'])) {
                    
                    $material_type = '';

                    $alias = 'images/';
                    
                    $dir = Yii::getAlias('@frontend/web/'.$alias);
                    echo $dir;
                    $fileName = $model->file->baseName . '.' . $model->file->extension;
                    $model->file->saveAs($dir . $fileName);
                    $model->file = $fileName; // без этого ошибка
                    $model->image = '/'.$alias . $fileName;
                // Для ресайза фотки до 800x800px по большей стороне надо обращаться к функции Box() или widen, так как в обертках доступны только 5 простых функций: crop, frame, getImagine, setImagine, text, thumbnail, watermark
                    $photo = Image::getImagine()->open($dir . $fileName);
                    $photo->thumbnail(new Box(800, 800))->save($dir . $fileName, ['quality' => 90]);
                    //$imagineObj = new Imagine();
                    //$imageObj = $imagineObj->open(\Yii::$app->basePath . $dir . $fileName);
                    //$imageObj->resize($imageObj->getSize()->widen(400))->save(\Yii::$app->basePath . $dir . $fileName);
                    
                    Yii::$app->controller->createDirectory(Yii::getAlias('@frontend/web/images/')); 
                    Image::thumbnail($dir . $fileName, 150, 70)
                    ->save(Yii::getAlias($dir .'thumbs/'. $fileName), ['quality' => 80]);
                }
            } 
            if ($model->save()) {
                //return $this->redirect(['view', 'id' => $model->id]);
                echo "good";
            }               
            
            
        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }
    }

    public function actionView($id = 1) 
    {
        $model = Scientist::findOne($id);

        return $this->render('view', [
                'model' => $model,
            ]);
    }


    public function createDirectory($path) {   
    //$filename = "/folder/{$dirname}/";  
    if (file_exists($path)) {  
        //echo "The directory {$path} exists";  
    } else {  
        mkdir($path, 0775, true);  
        //echo "The directory {$path} was successfully created.";  
    }
}


}
