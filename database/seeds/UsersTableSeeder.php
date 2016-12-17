<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// this retrieves the roles
    	$role_user = Role::where('name', 'User')->first();
    	$role_admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->first_name = 'Jane';
        $user->last_name = 'Visitor';
        $user->email = 'visitor@example.com';
        $user->password = bcrypt('vistor');
        $user->save();
        $user->roles()->attach($role_user);  // creates a relation to a third table

        $admin = new User();
        $admin->first_name = 'John';
        $admin->last_name = 'Admin';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $user->roles()->attach($role_admin);
    }
}
