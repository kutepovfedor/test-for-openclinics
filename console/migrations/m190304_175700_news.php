<?php

use yii\db\Migration;

/**
 * Class m190304_175700_news
 */
class m190304_175700_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE `news` (
            `id` INT(11) NOT NULL AUTO_INCREMENT,
            `statis` INT(11) NOT NULL DEFAULT '0' COMMENT 'Активность',
            `name` VARCHAR(255) NOT NULL COMMENT 'Название',
            `alias` VARCHAR(255) NOT NULL COMMENT 'ЧПУ (Alias)',
            `description` VARCHAR(255) NOT NULL COMMENT 'Описание',
            `content` TEXT NOT NULL COMMENT 'Контент',
            `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата',
            `update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Обновлено',
            PRIMARY KEY (`id`),
            UNIQUE INDEX `alias` (`alias`),
            INDEX `statis` (`statis`)
        )
        COMMENT='Новости'
        COLLATE='utf8_general_ci'
        ENGINE=InnoDB
        ;
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190304_175700_news cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190304_175700_news cannot be reverted.\n";

        return false;
    }
    */
}
