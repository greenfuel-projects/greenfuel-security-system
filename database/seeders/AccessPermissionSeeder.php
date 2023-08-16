<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 34; $i++) {

            for ($x = 1; $x <= 7; $x++) {
                if ($x <= 2) {
                    DB::table('access_permissions')->insert([['access_right_id' => $i, 'user_type_id' => $x, 'is_grant' => 1]]);
                } else {
                    DB::table('access_permissions')->insert([['access_right_id' => $i, 'user_type_id' => $x, 'is_grant' => 0]]);
                }
            }
        }
    }
}
