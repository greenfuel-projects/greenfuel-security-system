<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessRightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('access_rights')->insert([
            ['access_right' => 'Creation and Update'],
            ['access_right' => 'Log'],
            ['access_right' => 'Access Reports'],
            ['access_right' => 'View Dashboard'],
            ['access_right' => 'Record Incident'],
            ['access_right' => 'Resolve Incident'],
            ['access_right' => 'View Incident'],
            ['access_right' => 'Wipe All Data'],
            ['access_right' => 'Access Configurations'],
            ['access_right' => 'Right 1'],
            ['access_right' => 'Right 2'],
            ['access_right' => 'Right 3'],
            ['access_right' => 'Right 4'],
            ['access_right' => 'Right 5'],
            ['access_right' => 'Right 6'],
            ['access_right' => 'Right 7'],
            ['access_right' => 'Right 8'],
            ['access_right' => 'Right 9'],
            ['access_right' => 'Right 10'],
            ['access_right' => 'Right 11'],
            ['access_right' => 'Right 12'],
            ['access_right' => 'Right 13'],
            ['access_right' => 'Right 14'],
            ['access_right' => 'Right 15'],
            ['access_right' => 'Right 16'],
            ['access_right' => 'Right 17'],
            ['access_right' => 'Right 18'],
            ['access_right' => 'Right 19'],
            ['access_right' => 'Right 20'],
            ['access_right' => 'Right 21'],
            ['access_right' => 'Right 22'],
            ['access_right' => 'Right 23'],
            ['access_right' => 'Right 24'],
            ['access_right' => 'Right 25'],
        ]);
    }
}
