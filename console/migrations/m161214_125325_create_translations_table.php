<?php

use yii\db\Migration;

/**
 * Handles the creation of table `translations`.
 */
class m161214_125325_create_translations_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('translations', [
            'id' => $this->primaryKey(),
            'id_object'=>$this->integer(),
            'id_lang'=>$this->integer(),
            'field'=>$this->string(),
            'value'=>$this->string(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('translations');
    }
}
