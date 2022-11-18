<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Items extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'artis_id' => [
                'type' => 'int',
            ],
            'venue' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'ticket_limit' => [
                'type' => 'int'

            ],
            'event_date' => [
                'type' => 'datetime'
            ],
            
            'price' => [
                'type' => 'decimal'
            ],
            'status_id' => [
                'type' => 'int',
            ],
        ]);
        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('items', TRUE);

    }

    public function down()
    {
        $this->forge->dropTable('items');
    }
}
