<?php

use Illuminate\Database\Seeder;

use App\Location;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');

    	// empty table first
    	Location::truncate();

    	// create 50 records
    	factory(Location::class, 50)->create();
        // $this->call('UserTableSeeder');
    }
}
