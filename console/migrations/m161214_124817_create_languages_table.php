<?php

use yii\db\Migration;

/**
 * Handles the creation of table `languages`.
 */
class m161214_124817_create_languages_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('languages', [
            'id' => $this->primaryKey(),
            'url'=>$this->string(),
            'name'=>$this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('languages');
    }
}
