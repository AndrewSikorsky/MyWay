<?php

use yii\db\Migration;

class m160417_113955_create_route_durations extends Migration
{
    public function up()
    {
        $this->createTable('route_durations', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'duration' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('route_durations');
    }
}
