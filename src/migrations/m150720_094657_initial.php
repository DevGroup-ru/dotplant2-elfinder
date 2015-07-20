<?php

use yii\db\Schema;
use yii\db\Migration;

class m150720_094657_initial extends Migration
{
    public function up()
    {


        $this->insert(
            '{{%configurable}}',
            [
                'module' => 'elfinder',
                'sort_order' => 99,
                'section_name' => 'ElFinder',
                'display_in_config' => 1,
            ]
        );
    }

    public function down()
    {
        $this->delete('{{%configurable}}', ['module' => 'elfinder']);
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
