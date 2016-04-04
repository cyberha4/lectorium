<?php

use yii\db\Migration;

class m160403_085237_add_status_to_scientist extends Migration
{
    public function up()
    {
        $this->addColumn('scientist', 'status', $this->integer(1)->notNull()->defaultValue(1));
    }

    public function down()
    {
        $this->dropColumn('scientist', 'status');
    }
}
