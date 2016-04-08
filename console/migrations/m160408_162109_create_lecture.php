<?php

use yii\db\Migration;

class m160408_162109_create_lecture extends Migration
{
    public function up()
    {
        $this->createTable('lecture', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'body' => $this->text(),
            'created_by' => $this->integer(7)->notNull(),
            'created_at' => $this->integer(11)
        ]);
    }

    public function down()
    {
        $this->dropTable('lecture');
    }
}
