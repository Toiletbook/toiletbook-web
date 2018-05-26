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
            'id'=> '1',
        ]);

        DB::table('establishments')->insert([
            'name' => 'Jollibee Megamall Building A',
            'area_id' => '2',
            'id'=> '2',
        ]);

        DB::table('establishments')->insert([
            'name' => 'Jollibee Megamall Building B',
            'area_id' => '2',
            'id'=> '3',
        ]);

        DB::table('establishments')->insert([
            'name' => 'Makati Medical Center',            
            'area_id' => '1',
            'id'=> '4',
        ]);
        

        DB::table('establishments')->insert([
            'name' => 'MetroWalk',
            'area_id' => '2',
            'id'=> '5',
        ]);

        
        DB::table('establishments')->insert([
            'name' => 'Robinsons Galleria Ortigas',
            'area_id' => '2',
            'id'=> '6',
        ]);

        
        DB::table('establishments')->insert([
            'name' => 'Farmers Plaza Building',
            'area_id' => '3',
            'id' => '7',
        ]);

        
        DB::table('establishments')->insert([
            'name' => 'RCBC Plaza Tower 2',
            'area_id' => '1',
            'id' => '8',
        ]);

        
        DB::table('establishments')->insert([
            'name' => 'SM City Fairview Annex',
            'area_id' => '3',
            'id' => '9',
        ]);

        
        DB::table('establishments')->insert([
            'name' => 'Trinoma Mall',
            'area_id' => '3',
            'id' => '10',
        ]);

    }
}
