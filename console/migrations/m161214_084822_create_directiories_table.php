<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `directiories`.
 */
class m161214_084822_create_directiories_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('directiories', [
            'id' => $this->primaryKey(),
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT,

            'id_employee'=>Schema::TYPE_INTEGER,
            'icon'=>Schema::TYPE_STRING,

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('directiories');
    }
}
