<?php
use \yii\helpers\Html;
use \yii\widgets\Breadcrumbs;

$this->title = $model->title ;
$this->params['breadcrumbs'][] = $this->title;

$scientist = $model->scientist;
?>

<div class="main-lecture-view">
	<div class = 'title'>
		<h2><?=$model->title ?></h2>
	</div>
	<div class = 'title-body'>
		<p>
			Лектор: <?= Html::a($scientist->name, ['/scientist/view', 'id' => $scientist->id], ['class' => 'link']) ?>
	    </p>
	    <p>
	    	Дата записи:
	    </p>
	    <p>
	    	Дата публикации: <?= $model->created_at ?>
	    </p>
	</div>
	<div class = 'video'>
   	  <p>
   	      <iframe width="640" height="360" 
   	      src="http://www.youtube.com/embed/<?= $model->video_url ?>" frameborder="0" 
   	      allowfullscreen></iframe>
   	  </p>
	</div>
	<div class = 'text'>
		<p>
			<?= $model->body ?>


	</div>
</div>