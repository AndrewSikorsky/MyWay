<?php

use yii\db\Migration;

class m160417_113113_create_table_route_seasons extends Migration
{
    public function up()
    {
        $this->createTable('route_seasons', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('route_seasons');
    }
}
