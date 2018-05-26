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

        DB::table('establishments')->insert([
            'name' => 'McDonalds Glorietta 4',
            
            'area_id' => '3',
        ]);

        
        DB::table('establishments')->insert([
            'name' => 'MetroWalk',
           
            'area_id' => '1',
        ]);

        
        DB::table('establishments')->insert([
            'name' => 'Prestige Tower',
      
            'area_id' => '3',
        ]);

        
        DB::table('establishments')->insert([
            'name' => '30th Ayala Mall',
           
            'area_id' => '2',
        ]);

        
        DB::table('establishments')->insert([
            'name' => 'RCBC Plaza',
            
            'area_id' => '1',
        ]);

        
        DB::table('establishments')->insert([
            'name' => 'Cash and Carry',
          
            'area_id' => '1',
        ]);

        
        DB::table('establishments')->insert([
            'name' => 'Makati Executive Tower 4',
            
            'area_id' => '3',
        ]);
    }
}
