<?php

use yii\db\Migration;


class m191201_143544_core extends Migration
{

    public function safeUp()
    {

      $this->createTable('{{%tasks}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'description' => $this->text(),
            'status_id' => $this->integer()->defaultValue(1),
            'creator_id' => $this->integer(),
            'responsible_id' => $this->integer(),
            'deadline' => $this->datetime(),
            'created_at' => $this->datetime()->defaultValue(date('Y-m-d H:i:s')),
            'updated_at' => $this->datetime(),
        ]);
      ///////////////////////////////////////////
/*
        // creates index for column `status_id`
        $this->createIndex(
            '{{%idx-tasks-status_id}}',
            '{{%tasks}}',
            'status_id'
        );

        // add foreign key for table `{{%statuses}}`
        $this->addForeignKey(
            '{{%fk-tasks-status_id}}',
            '{{%tasks}}',
            'status_id',
            '{{%task_statuses}}',
            'id',
            'CASCADE',
            'CASCADE'
        );

        // creates index for column `creator_id`
        $this->createIndex(
            '{{%idx-tasks-creator_id}}',
            '{{%tasks}}',
            'creator_id'
        );

        // add foreign key for table `{{%users}}`
        $this->addForeignKey(
            '{{%fk-tasks-creator_id}}',
            '{{%tasks}}',
            'creator_id',
            '{{%users}}',
            'id',
            'CASCADE',
            'CASCADE'
        );

        // creates index for column `responsible_id`
        $this->createIndex(
            '{{%idx-tasks-responsible_id}}',
            '{{%tasks}}',
            'responsible_id'
        );

        // add foreign key for table `{{%users}}`
        $this->addForeignKey(
            '{{%fk-tasks-responsible_id}}',
            '{{%tasks}}',
            'responsible_id',
            '{{%users}}',
            'id',
            'CASCADE',
            'CASCADE'
        );
*/
        //////////////////////////////////////////////
    }

    public function safeDown()
    {
        $this->dropTable('{{%tasks}}');
 
}
}