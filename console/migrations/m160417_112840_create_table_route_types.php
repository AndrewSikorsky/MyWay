<?php

use yii\db\Migration;

class m160417_112840_create_table_route_types extends Migration
{
    public function up()
    {
        $this->createTable('route_types', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('route_types');
    }
}
