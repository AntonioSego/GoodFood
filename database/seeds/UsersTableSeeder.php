<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name','superadmin')->first();
        $authorRole = Role::where('name','admin')->first();
        $userRole = Role::where('name','korisnik')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        $author = User::create([
            'name' => 'Author User',
            'email' => 'author@author.com',
            'password' => Hash::make('password')
        ]);

        $user = User::create([
            'name' => 'Generic User',
            'email' => 'user@user.com',
            'password' => Hash::make('password')
        ]); 
        $author = User::create([
            'name' => 'Pizzeria Aurelian',
            'email' => 'pizzaaurelian@gmail.com',
            'password' => Hash::make('password')
        ]);

        $author = User::create([
            'name' => 'Fast Food Grizz',
            'email' => 'fastfoodgriz@gmail.com',
            'password' => Hash::make('password')
        ]);
        $author = User::create([
            'name' => 'Cofee Brasilia',
            'email' => 'coffebrasilia@gmail.com',
            'password' => Hash::make('password')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);

    }
}
