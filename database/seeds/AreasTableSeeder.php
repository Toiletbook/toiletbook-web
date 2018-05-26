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
        DB::table('areas')->insert(['name' => 'BGC']);
        DB::table('areas')->insert(['name' => 'SM Megamall']);
    }
}
