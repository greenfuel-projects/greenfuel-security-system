<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->insert([
            ['site_name' => 'Unknown'],
            ['site_name' => 'Mill'],
            ['site_name' => 'Agriculture Workshop'],
            ['site_name' => 'Save Guest'],
            ['site_name' => 'Middle Sabbi'],
            ['site_name' => 'Training Center'],
            ['site_name' => 'Suppa 3.0'],
            ['site_name' => 'Biljen'],
            ['site_name' => 'Turbo Mine'],
        ]);
    }
}
