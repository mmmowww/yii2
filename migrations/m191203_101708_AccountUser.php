<?php

use yii\db\Migration;

/**
 * Class m191203_101708_AccountUser
 */
class m191203_101708_AccountUser extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
       $this->createTable('{{%AccountUser}}', [
            'id' => $this->primaryKey(),
            'userName' => $this->text(),
            'userPassword' => $this->text(),
            'userEmail' =>$this->text(),
            'userRole' =>$this->text(),


            
           
            
           
            
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
         $this->dropTable('{{%AccountUser}}');
    }
    }
