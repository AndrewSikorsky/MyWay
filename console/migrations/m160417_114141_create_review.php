<?php

use yii\db\Migration;

class m160417_114141_create_review extends Migration
{
    public function up()
    {
        $this->createTable('review', [
            'id' => $this->primaryKey(),
            'route_id' => $this->integer(),
            'user_id' => $this->integer(),
            'text' => $this->string(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
    }

    public function down()
    {
        $this->dropTable('review');
    }
}
