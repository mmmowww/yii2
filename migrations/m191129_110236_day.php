<?php

use yii\db\Migration;


class m191129_110236_day extends Migration
{
   
    public function safeUp()
    {
$this->createTable('{{%day}}', [
            'id' => $this->primaryKey(),
            'ActivityName' => $this->string(),
            'Activity' => $this->text(),
            'ActivityInfo' => $this->dateTime(),
            'userName' => $this->text(),
            'date' => $this->date(),
            
]);
/////////////////////////////////////////
/*
        $this->createIndex(
            '{{%idx-day-mounth_id}}',
            '{{%mounth}}',
            'userName'
        );

$this->addForeignKey(
            '{{%id_for_day_mounth}}',
            'id',
            '{{%mounth}}',
            'userName',
            '{{%mounth}}',
            'CASCADE',
            'CASCADE'
        );
*/
//////////////////////////////////////
    }

    public function safeDown()
    {
       $this->dropTable('{{%day}}');

        
    }

}
