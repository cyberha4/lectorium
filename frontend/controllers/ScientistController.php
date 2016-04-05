<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Scientist;
use frontend\models\ScientistSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use yii\web\UploadedFile;
use yii\imagine\Image;

use Imagine\Gd;
use Imagine\Image\Box;
use Imagine\Image\BoxInterface;

/**
 * ScientistController implements the CRUD actions for Scientist model.
 */
class ScientistController extends Controller
{
    /**
     * @inheritdoc
     */

    private $_model;

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create', 'update'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['create'],
                        'roles' => ['ScientistCreate'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['update'],
                        'matchCallback' => function ($rule, $action) {
                        return Yii::$app->user->can('ScientistUpdate', ['scientist' => $this->findModel(Yii::$app->request->get('id'))]);
                    }
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Scientist models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ScientistSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Scientist model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('myview', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Scientist model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Scientist();

        if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($model, 'file');
            if ($file && $file->tempName) {
                $model->file = $file;
                $this->uploadPhoto($model);
                
            } 
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }               
            
            
        } else {
            return $this->render('myupdate', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Scientist model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $delPhoto = Yii::$app->request->post()['Scientist']['del_img'];
            //$model->image = $delPhoto ? '' : $model->image;
            if (!$delPhoto) {
                $file = UploadedFile::getInstance($model, 'file');
                if ($file && $file->tempName) {
                    $model->file = $file;
                    $this->uploadPhoto($model);
                } 
            } else 
                $model->image = '';

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else
                new NotFoundHttpException('The record didnt save');
        } else {
            return $this->render('myupdate', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Scientist model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->status = 0;
        $model->save();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Scientist model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Scientist the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {

        \c_log(0);
        if ($this->_model === null) {
            \c_log(1);
            $this->_model = Scientist::findOne([
                'id' => $id,
                'status' => Scientist::STATUS_ACTIVE,
            ]);
        }
        if ($this->_model !== null) {
            return $this->_model;
        } 
        throw new NotFoundHttpException('The requested page does not exist.');

    }

    protected function createDirectory($path) {   
        //$filename = "/folder/{$dirname}/";  
        if (file_exists($path)) {  
            //echo "The directory {$path} exists";  
        } else {  
            mkdir($path, 0775, true);  
            //echo "The directory {$path} was successfully created.";  
        }
    }

    protected function uploadPhoto (&$model) {
        if ($model->validate(['file'])) {
                    
                    $material_type = '';

                    $alias = 'images/';
                    
                    $dir = Yii::getAlias('@frontend/web/'.$alias);
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
}
