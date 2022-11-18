<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSale extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'event_id' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'custumer_id' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'ticket_no' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'purchased_at' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'status_id' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'validate_at' => [
                'type' => 'varchar',
                'constraint' => 255
            ],

            'user_id' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'validated_by_id' => [
                'type' => 'datetime'
            ],
            'grand_total' => [
                'type' => 'int'
            ],
        ]);
        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('sales', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('sales');
    }
}
