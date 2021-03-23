<?php

use yii\db\Migration;

/**
 * Class m210127_054033_load
 */
class m210127_054033_load extends Migration
{
    /**
     * {@inheritdoc}
     */
     public function safeUp()
    {
        $sql = file_get_contents(__DIR__ . '/db_smartvillage.sql');
        $command = Yii::$app->db->createCommand($sql);
        $command->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210127_054033_load cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210127_054033_load cannot be reverted.\n";

        return false;
    }
    */
}
