<?php
use \Yii;
use \yii\widgets\ListView;

?>
<div class="main-lecture-index">
    <p>
        <div class="col-xs-12">
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'layout' => '{items}{pager}',
            'itemOptions' => ['class' => 'item'],
            'itemView' => '_view'
        ]) ?>
    </div>

    </p>

</div>
