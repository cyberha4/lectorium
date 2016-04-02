<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "cont".
 *
 * @property integer $id
 * @property string $text
 * @property string $url
 */
class ScientistForm extends \yii\db\ActiveRecord
{
    public $file;
    public $del_img;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cont';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'url'], 'required'],
            [['text'], 'string'],
            [['url'], 'string', 'max' => 255],
            [['file'], 'file', 'extensions' => 'png, jpg'],
            [['del_img'], 'boolean'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'url' => 'Url',
        ];
    }
}
