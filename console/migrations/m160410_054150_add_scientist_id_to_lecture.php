<?php
use yii\db\Schema;
use yii\db\Migration;

class m160410_054150_add_scientist_id_to_lecture extends Migration
{
    public function up()
    {
        $this->addColumn('lecture', 'scientist_id', $this->integer(5));
        $this->addForeignKey('fk-lecture-scientist_id-scientist-id', '{{%lecture}}', 'scientist_id', '{{%scientist}}', 'id');

    }

    public function down()
    {
        $this->dropColumn('lecture', 'scientist_id');
        $this->dropForeignKey('fk-lecture-scientist_id-scientist-id','{{%lecture}}');
    }
}
