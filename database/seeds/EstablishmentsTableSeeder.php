<?php

use Illuminate\Database\Seeder;

class EstablishmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('establishments')->insert([
            'name' => 'ASPACE Makati',
            'area_id' => '1',
        ]);

        DB::table('establishments')->insert([
            'name' => 'Jollibee Megamall Building A',
            'area_id' => '2',
        ]);

        DB::table('establishments')->insert([
            'name' => 'Jollibee Megamall Building B',
            'area_id' => '2',
        ]);
    }
}
