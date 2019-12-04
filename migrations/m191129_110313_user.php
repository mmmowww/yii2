<?php

use yii\db\Migration;


class m191129_110313_user extends Migration
{

    public function safeUp()
    {
     $this->createTable('{{%user}}',[

            'id' => $this->primaryKey(),
            ///////////////////////
            'userName' => $this->text(),
            'password' => $this->text(),
           
            
]);
     /////////////////////////////////////////////////////
     /*
     $this->addForeignKey(
            '{{%id_for_user_activity}}'
            'id',
            '{{%activity}}',
            'userName',
            '{{%activity}}',
            'CASCADE',
            'CASCADE'
        );
       */ 
     //////////////////////////////////////
    }
  public function safeDown()
    {
          $this->dropTable('{{%user}}');
    }
};