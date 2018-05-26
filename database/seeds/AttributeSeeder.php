<?php

use Illuminate\Database\Seeder;
use ToiletBook\Washroom;

class AttributeSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Washroom::all() as $washroom) {
            DB::table('attributes')->insert(['name' => 'Wait Time', 'washroom_id' => $washroom->id]);
            DB::table('attributes')->insert(['name' => 'Cleanliness', 'washroom_id' => $washroom->id]);
            DB::table('attributes')->insert(['name' => 'Happiness', 'washroom_id' => $washroom->id]);
        }
    }
}
