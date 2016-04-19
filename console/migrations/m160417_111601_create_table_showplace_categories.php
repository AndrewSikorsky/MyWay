<?php

use yii\db\Migration;

class m160417_111601_create_table_showplace_categories extends Migration
{
    public function up()
    {
        $this->createTable('showplace_categories', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('showplace_categories');
    }
}
