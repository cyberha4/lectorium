<?php
use \yii\helpers\Html;

$scientist = $model->scientist;
?>
<div class = 'item'>
	<div class = 'row'>
		<div class="col-xs-2">
			<img class="img-responsive" src="http://img.youtube.com/vi/<?= $model->video_url ?>/0.jpg" alt="Bad..">
		</div>
		<div class="col-xs-8">
			<div class='item-lection-title'>
				<h3><?= Html::a($model->title, ['view', 'id' => $model->id], ['class' => 'link']) ?></h3>
			</div>
			<div class = 'col-xs-3 item-lection-scientist'>
					<?= Html::a($scientist->name, ['/scientist/view', 'id' => $scientist->id], ['class' => 'link']) ?>
			</div>
			<div class = 'col-xs-9 item-lection-work'>
					<?= $scientist->place ?>
			</div>
			<div class='col-xs-12 item-lection-annotation'>
			<?= $model->annotation ?>
			</div>
		</div>
	
	</div>
</div>
<hr>