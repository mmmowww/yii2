<?php

use yii\db\Migration;


/**
 * Class m191203_155443_Activity
 */
class m191203_155443_Activity extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {



$this->createTable('{{%activity}}', [
            'id' => $this->primaryKey(),
            'activity' => $this->string(),
            'activityinfo' => $this->text(),
            ////////////////
            'currentDate' => $this->dateTime(),
            'dataStart' => $this->integer(),
            'dateFinish' => $this->integer(),
            ///////////////////////
            'userName' => $this->text(),
            'bdMount' => $this->date(),
            'bdWeek' => $this->integer(),
            'bdDay'=>$this->text(),
            'reapit' => $this->boolean(),
            'Block' => $this-> boolean(),
            'DayRule' => $this->json(),
        ]);








    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{$activity}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191203_155443_Activity cannot be reverted.\n";

        return false;
    }
    */
}
