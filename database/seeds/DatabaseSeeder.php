<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(AreasTableSeeder::class);
        $this->call(EstablishmentsTableSeeder::class);
        $this->call(WashroomsTableSeeder::class);
        $this->call(AttributeSeeder::class);
        $this->call(RatingSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
