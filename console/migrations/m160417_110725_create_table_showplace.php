<?php

use yii\db\Migration;

class m160417_110725_create_table_showplace extends Migration
{
    public function up()
    {
        $this->createTable('showplace', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'geo_lat' => $this->float()->notNull(),
            'geo_long' => $this->float()->notNull(),
            'photo' => $this->string(),
        ]);
    }

    public function down()
    {
        $this->dropTable('showplace');
    }
}
