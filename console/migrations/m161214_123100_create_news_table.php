<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `news`.
 */
class m161214_123100_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
            'content'=>$this->text(),
            'short'=>$this->text(),
            'date'=>$this->date(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('news');
    }
}
