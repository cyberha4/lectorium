<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Scientist */

$this->title = 'Create Scientist';
$this->params['breadcrumbs'][] = ['label' => 'Scientists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scientist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
