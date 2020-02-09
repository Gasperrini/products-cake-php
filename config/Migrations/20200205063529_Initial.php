<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('products')
            ->addColumn('title', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('type', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('filename', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('height', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('width', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('price', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 6,
                'scale' => 2,
            ])
            ->addColumn('rating', 'integer', [
                'default' => null,
                'limit' => 1,
                'null' => false,
            ])
            ->create();
    }

    public function down()
    {
        $this->table('products')->drop()->save();
    }
}
