<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = \App\Models\User::factory(4)->create();
        \App\Models\Role::factory(2)->create();

        foreach($users as $user){

            $role = \App\Models\Role::inRandomOrder()->first(); 
            $user->roles()->attach($role);
         
        }

        // $role->users()->attach($user);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
