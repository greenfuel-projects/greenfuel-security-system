<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            ['department' => 'Logistics'],
            ['department' => 'Harvesting'],
            ['department' => 'Agriculture'],
            ['department' => 'Mill'],
            ['department' => 'Procurement'],
            ['department' => 'Civils'],
            ['department' => 'Human Resources'],
            ['department' => 'IT'],
            ['department' => 'Community'],
            ['department' => 'Finance'],
            ['department' => 'Stores'],
            ['department' => 'Gantry'],
            ['department' => 'Sports'],
            ['department' => 'Loss Control'],
            ['department' => 'Admin'],
            ['department' => 'Machineshop'],
            ['department' => 'Fabrication'],
            ['department' => 'Distillery'],
        ]);
    }
}
