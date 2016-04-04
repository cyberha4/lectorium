<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Scientist */
/* @var $form ActiveForm */
?>
<div class="new-index">
    <?= $post ?>
    <?php $form = ActiveForm::begin(['id' => 'Scientist', 'options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($model, 'name')->label('Имя'); ?>
        <?= $form->field($model, 'city')->label('Город'); ?>
        <?= $form->field($model, 'biography')->textarea(['rows' => 2, 'cols' => 5])->label('Биография'); ?>
        <?= $form->field($model, 'achievements')
        		 ->dropDownList([
    				    'А' => 'Вариант А',
    				    'Б' => 'Вариант Б',
    				    'В' => 'Вариант В',
    				],
    				[
    				    'prompt' => 'Выберите один вариант'
    				]);		 ?>
		
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
    <?php ActiveForm::end(); ?><br>
    <?php
    	$mod = $model->image ? '' : $model::findOne(1);
    	?>

<img src="<?= $mod->image ?>" alt="<?= $mod->image ?>"><br>
<iframe width="640" height="360" src="http://www.youtube.com/embed/-EEllPq8LvI" frameborder="0" allowfullscreen></iframe><br><em><a href="http://www.lektorium.tv/lecture/28018">Посмотреть видео</a> на сайте <a href="http://www.lektorium.tv">Лекториума</a></em>


</div><!-- new-index -->
