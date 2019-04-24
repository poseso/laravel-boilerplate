<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $settings = [
            [
                'scope' => 'default',
                'name' => 'app_name',
                'value' => '"Laravel 5.8 Kickstart"',
            ],
            [
                'scope' => 'default',
                'name' => 'app_stage',
                'value' => '"Dev"',
            ],
            [
                'scope' => 'default',
                'name' => 'timezone',
                'value' => '"America/Santo_Domingo"',
            ],
        ];

        DB::table('settings')->insert($settings);
    }
}
