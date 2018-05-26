<?php

use Illuminate\Database\Seeder;

class VisitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visitors')->insert([
            'name'                 => 'Jane Doe',
            'gender'               => 'Female'
        ]);
    }
}
