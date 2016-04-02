<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cont */
/* @var $form ActiveForm */
?>
<div class="new-index">
    <?= $post ?>
    <?php $form = ActiveForm::begin(['id' => 'Cont', 'options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($model, 'text') ?>
        <?= $form->field($model, 'url') ?>
		
		<?php
   			if(isset($model->image) && file_exists(Yii::getAlias('@webroot', $model->image)))
   			{ 
   			    echo Html::img($model->image, ['class'=>'img-responsive']);
   			    echo $form->field($model,'del_img')->checkBox(['class'=>'span-1']);
   			}
		?>
	<?= $form->field($model, 'file')->fileInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- new-index -->
