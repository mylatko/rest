<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class RestInitMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up(): void
    {
        $sql = 'CREATE TABLE `categories` (
            `id`            int(11) NOT NULL AUTO_INCREMENT,
            `name`          VARCHAR(256) NOT NULL,
            `description`   text NOT NULL,
            `created`       datetime NOT NULL,
            `modified`      timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
             PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ';

        $this->execute($sql);
    }

    public function down(): void
    {
        $sql = 'DROP TABLE `categories`';
        $this->execute($sql);
    }
}
