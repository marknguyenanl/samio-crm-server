<?php

namespace Database\Seeders;

use App\Models\ContactStage;
use Illuminate\Database\Seeder;

class ContactStageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contact_stages = [
            ['id' => '1', 'key' => 'prospect',   'label' => 'Prospect',   'order' => '0'],
            ['id' => '2', 'key' => 'lead',       'label' => 'Lead',       'order' => '1'],
            ['id' => '3', 'key' => 'qualified',  'label' => 'Qualified',  'order' => '2'],
            ['id' => '4', 'key' => 'opportunity', 'label' => 'Opportunity', 'order' => '3'],
            ['id' => '5', 'key' => 'customer',   'label' => 'Customer',   'order' => '4'],
            ['id' => '6', 'key' => 'churned',      'label' => 'Churned',   'order' => '5'],
        ];

        foreach ($contact_stages as $contact_stage) {
            ContactStage::updateOrCreate(
                ['id' => $contact_stage['id']],
                [
                    'key' => $contact_stage['key'],
                    'label' => $contact_stage['label'],
                    'order' => $contact_stage['order'],
                ]
            );
        }
    }
}
