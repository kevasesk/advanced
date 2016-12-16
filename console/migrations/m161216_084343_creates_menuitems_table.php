<?php

use yii\db\Migration;

class m161216_084343_creates_menuitems_table extends Migration
{
    public function up()
    {
        $this->createTable('menu_items', [
            'id' => $this->primaryKey(),
            'index'=>$this->integer(),
            'field'=>$this->string(),
            'value'=>$this->text(),
            'lang_id'=>$this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('menu_items');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
