<?php

use yii\db\Migration;

class m160410_085829_add_place_to_scientist extends Migration
{
    public function up()
    {
        $this->addColumn('scientist', 'place', $this->text());
    }

    public function down()
    {
        $this->dropColumn('scientist', 'place');
    }
}
