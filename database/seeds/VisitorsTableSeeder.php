<?php

use Illuminate\Database\Seeder;
use ToiletBook\Washroom;

class VisitorsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (Washroom::all() as $item) {
            $count = $faker->numberBetween(4, 30);

            for ($x = 0; $count > $x; $x++) {
                DB::table('visitors')->insert([
                    'washroom_id' => $item->id,
                    'created_at'  => $faker->dateTime()
                ]);
            }
        }
    }
}
