<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// create the role so you can use them in the usersTable Seeder
        $this->call(RoleTableSeeder::class);  
        $this->call(UsersTableSeeder::class);
        
    }
}
