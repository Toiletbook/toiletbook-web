<?php

use Illuminate\Database\Seeder;
use ToiletBook\Attribute; 

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create(); 
 
        foreach (Attribute::all() as $item) { 
            DB::table('ratings')->insert(['value' => $faker->numberBetween(1,5), 'attribute_id' => $item->id]); 
        } 
    }
}

