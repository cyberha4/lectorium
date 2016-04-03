<?php

use yii\db\Migration;

class m160403_064412_create_scientist extends Migration
{
    public function up()
    {
        $this->createTable('scientist', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100),
            'city' => $this->string(100),
            'biography' => $this->text(),
            'achievements' => $this->text(),
            'image' => $this->string(255)
        ]);
    }

    public function down()
    {
        $this->dropTable('scientist');
    }
}
