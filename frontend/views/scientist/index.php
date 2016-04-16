<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ScientistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Scientists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scientist-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class = 'row'>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'layout' => '{items}{pager}',
                'itemOptions' => ['class' => 'item'],
                'itemView' => '_view'
            ]) ?>
    </div>
</div>
