<?php

use yii\db\Migration;

class m160405_033441_add_user_id_to_scientist extends Migration
{
    public function up()
    {
        $this->addColumn('scientist', 'user_id', $this->integer(5)->notNull()->defaultValue(1));
    }

    public function down()
    {
        $this->dropColumn('scientist', 'user_id');
    }
}
