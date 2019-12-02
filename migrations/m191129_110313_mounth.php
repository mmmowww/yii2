<?php

use yii\db\Migration;


class m191129_110313_mounth extends Migration
{
    
    public function safeUp()
    {
     $this->createTable('{{%mounth}}', [

            'id' => $this->primaryKey(),
            'ActivityName' => $this->string(),
            'Activity' => $this->text(),
            'ActivityInfo' => $this->dateTime(),
            ///////////////////////
            'userName' => $this->text(),
            'date' => $this->date(),
            
]);
  //////////////////////////////////////////////////////////  

    $this->addForeignKey(
            '{{%id_for_mounth_day}}'
            'id',
            '{{%day}}',
            'userName',
            '{{%day}}',
            'CASCADE',
            'CASCADE'
        );
      
//////////////////////////////////////////////////////
    }
    public function safeDown()
    {
          $this->dropTable('{{%mounth}}');
    }
  
}
