<?php

use yii\db\Migration;


class m160408_170942_add_image_video_url_to_lecture extends Migration
{
    public function up()
    {
        $this->addColumn('lecture', 'video_url', $this->string(255));
        $this->addColumn('lecture', 'type', $this->integer(5));
        $this->addColumn('lecture', 'status', $this->integer(5));
        $this->addColumn('lecture', 'annotation', $this->string(255));
    }

    public function down()
    {
        $this->dropColumn('lecture', 'type');
        $this->dropColumn('lecture', 'status');
        $this->dropColumn('lecture', 'video_url');
        $this->dropColumn('lecture', 'annotation');
    }
}
