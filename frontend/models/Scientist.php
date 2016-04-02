<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "scientist".
 *
 * @property integer $id
 * @property string $name
 * @property string $city
 * @property string $biography
 * @property string $achievements
 */
class Scientist extends \yii\db\ActiveRecord
{
    public $file;
    public $del_img;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'scientist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'city', 'biography', 'achievements'], 'required'],
            [['biography', 'achievements'], 'string'],
            [['name', 'city'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'city' => 'City',
            'biography' => 'Biography',
            'achievements' => 'Achievements',
        ];
    }
}
