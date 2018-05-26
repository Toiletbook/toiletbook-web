<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert(['name' => 'Makati']);
        DB::table('areas')->insert(['name' => 'Megamall']);
        DB::table('areas')->insert(['name' => 'EDSA']);
    }
}