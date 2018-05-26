<?php

use Illuminate\Database\Seeder;

class WashroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('washrooms')->insert([
            'name' => '',
            'location_description' => 'In the Greenbelt 4, 2nd floor, along with Mcdonalds',
            'establishment_id' => 1
        ]);
    }
}
