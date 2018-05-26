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
            'name' => 'GreenBelt',
            'area_id' => '1',
        ]);

        DB::table('establishments')->insert([
            'name' => 'RCBC',
            'area_id' => '2',
        ]);
    }
}
