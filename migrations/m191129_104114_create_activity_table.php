<?php

use yii\db\Migration;


class m191129_104114_create_activity_table extends Migration
{
    
    public function safeUp()
    {
        $this->createTable('{{%activity}}', [
            'id' => $this->primaryKey(),
            'activity' => $this->string(),
            'activityinfo' => $this->text(),
            'currentDate' => $this->dateTime(),
            ///////////////////////
            'userName' => $this->text(),
            'bdMount' => $this->date(),
            'bdWeek' => $this->integer(),
            'bdDay'=>$this->text(),
            'reapit' => $this->boolean(),
            'Block' => $this-> boolean(),
            'DayRule' => $this->json(),
        ]);

        //////////////////////////

        $this->createIndex(
            '{{%idx-activity-user_id}}',
            '{{%user}}',
            'user'
        );

       
        $this->addForeignKey(
            '{{%idx_activity_user}}',
            'id',
            '{{%user}}',
            'userName',
            '{{%user}}',
            'CASCADE',
            'CASCADE'
        );
       



        /////////////////////
    }
    public function safeDown()
    {
        $this->dropTable('{{%activity}}');
    }
}
