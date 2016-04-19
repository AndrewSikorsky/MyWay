<?php

use yii\db\Migration;

class m160417_111843_create_table_showplace_subcategories extends Migration
{
    public function up()
    {
        $this->createTable('showplace_subcategories', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('showplace_subcategories');
    }
}
