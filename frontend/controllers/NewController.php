<?php

namespace frontend\controllers;

use app\models\Cont;
use Yii;

//use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\imagine\Image;


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
        $model = new Cont();

        if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($model, 'file');
            if ($file && $file->tempName) {
                $model->file = $file;
                if ($model->validate(['file'])) {
                    
                    switch ($model->material_type) {
                        case 0:
                            $material_type = '';
                            break;
                        case 1:
                            $material_type = 'news/';
                            break;
                        case 2:
                            $material_type = 'persons/';
                            break;
                        case 3:
                            $material_type = 'movies/';
                            break;
                        case 4:
                            $material_type = 'interview/';
                            break;
                    }
                    
                    $dir = Yii::getAlias('images/blog/'.$material_type);
                    $fileName = $model->file->baseName . '.' . $model->file->extension;
                    $model->file->saveAs($dir . $fileName);
                    $model->file = $fileName; // без этого ошибка
                    $model->image = '/'.$dir . $fileName;
// Для ресайза фотки до 800x800px по большей стороне надо обращаться к функции Box() или widen, так как в обертках доступны только 5 простых функций: crop, frame, getImagine, setImagine, text, thumbnail, watermark
                    $photo = Image::getImagine()->open($dir . $fileName);
                    $photo->thumbnail(new Box(800, 800))->save($dir . $fileName, ['quality' => 90]);
                    //$imagineObj = new Imagine();
                    //$imageObj = $imagineObj->open(\Yii::$app->basePath . $dir . $fileName);
                    //$imageObj->resize($imageObj->getSize()->widen(400))->save(\Yii::$app->basePath . $dir . $fileName);
                    
                    Yii::$app->controller->createDirectory(Yii::getAlias('images/blog/'.$material_type.'/thumbs')); 
                    Image::thumbnail($dir . $fileName, 150, 70)
                    ->save(Yii::getAlias($dir .'thumbs/'. $fileName), ['quality' => 80]);
                }
            } 
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }               
            
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
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
