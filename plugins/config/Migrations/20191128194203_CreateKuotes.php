<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateKuotes extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('kuotes');
        $table->addColumn('kuote', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('author_id', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('status', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('deleted_at', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('by_admin', 'boolean', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('photo', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->create();
    }
}
