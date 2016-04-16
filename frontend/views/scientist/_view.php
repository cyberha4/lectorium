<?php
use \yii\helpers\Html;
$this->params['test']++;
$test = $this->params['test'];
?>
<?php for ($i=0; $i<1; $i++): ?>
<div class="col-xs-4">

	<?= Html::a('<img class="img-responsive" src=" '. Html::encode($model->image) .' " alt="Bad..">', 
						['scientist/view', 'id' => $model->id])	?>

	
	<?= Html::a(Html::encode($model->name), ['scientist/view', 'id' => $model->id], 
											['class' => 'profile-link']) ?>

</div>
<?php endfor ?>

