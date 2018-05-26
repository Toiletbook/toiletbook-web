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
            'establishment_id'      => 1,
            'name'                  => 'Men\'s Washroom @ 5F',
            'location_description'  => '5th floor, near the elevators',
            'open_hours'            => '24 hours, Monday-Friday',
            'latitude'              => '14.554036',
            'longitude'             => '121.021707',
            'is_sponsored'          => true,
            'gender_is_female_only' => false,
            'gender_is_male_only'   => true,
            'gender_is_unisex'      => false,
            'gender_has_both'       => false,
            'is_free'               => true,
            'need_membership'       => true,
            'has_water'             => true,
            'has_soap'              => false,
            'has_shower'            => false,
            'has_wifi'              => true,
            'has_tv'                => false,
            'has_tissues'           => true,
            'has_bidet'             => true,
            'is_pwd_friendly'       => false,
            'has_vending_machine'   => false,
            'has_diaper_station'    => false,
        ]);

        DB::table('washrooms')->insert([
            'establishment_id'      => 1,
            'name'                  => 'Women\'s Washroom @ 5F',
            'location_description'  => '5th floor, near the elevators',
            'open_hours'            => '24 hours, Monday-Friday',
            'latitude'              => '14.554036',
            'longitude'             => '121.021707',
            'is_sponsored'          => true,
            'gender_is_female_only' => true,
            'gender_is_male_only'   => false,
            'gender_is_unisex'      => false,
            'gender_has_both'       => false,
            'is_free'               => true,
            'need_membership'       => true,
            'has_water'             => true,
            'has_soap'              => false,
            'has_shower'            => false,
            'has_wifi'              => true,
            'has_tv'                => false,
            'has_tissues'           => true,
            'has_bidet'             => true,
            'is_pwd_friendly'       => false,
            'has_vending_machine'   => false,
            'has_diaper_station'    => false,
        ]);

        DB::table('washrooms')->insert([
            'establishment_id'      => 2,
            'name'                  => 'Women\'s Washroom @ 5F',
            'location_description'  => 'Near the ATM Center',
            'open_hours'            => '9:00am to 10:00pm, Sunday to Saturday',
            'latitude'              => '14.554036',
            'longitude'             => '',
            'is_sponsored'          => false,
            'gender_is_female_only' => true,
            'gender_is_male_only'   => false,
            'gender_is_unisex'      => false,
            'gender_has_both'       => false,
            'is_free'               => false,
            'need_membership'       => false,
            'has_water'             => true,
            'has_soap'              => true,
            'has_shower'            => false,
            'has_wifi'              => false,
            'has_tv'                => false,
            'has_tissues'           => true,
            'has_bidet'             => true,
            'is_pwd_friendly'       => false,
            'has_vending_machine'   => false,
            'has_diaper_station'    => false,
        ]);

    }
}
