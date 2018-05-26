<?php

use Illuminate\Database\Seeder;

class WashroomsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('washrooms')->insert([
            'name'                 => 'Men\'s Washroom @ 5F',
            'location_description' => '5th floor, near the elevators',
            'establishment_id'     => 1
        ]);

        DB::table('washrooms')->insert([
            'name'                 => 'Women\'s Washroom @ 5F',
            'location_description' => '4th floor, near the elevators',
            'establishment_id'     => 1
        ]);

        DB::table('washrooms')->insert([
            'name'                 => 'Jollibee',
            'location_description' => '2nd floor, beside McDonalds',
            'establishment_id'     => 2
        ]);
    }
}
