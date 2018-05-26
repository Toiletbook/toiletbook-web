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
        DB::table('areas')->insert(['id' => 1, 'name' => 'Makati']);
        DB::table('areas')->insert(['id' => 2, 'name' => 'Pasig']);
        DB::table('areas')->insert(['id' => 3, 'name' => 'QC']);
    }
}
