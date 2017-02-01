<?php

use yii\db\Migration;

class m161222_110922_add_ru_field_directions_table extends Migration
{
    public function up()
    {
            $this->addColumn(
                'directiories',
                'content_ru',
                'string'
            );
    }

    public function down()
    {
        $this->dropColumn(
            'directiories',
            'content_ru',
            'string'
        );

        return false;
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
