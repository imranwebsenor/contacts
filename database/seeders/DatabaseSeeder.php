<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user =  User::where('email' ,'test@example.com')->first();
        Role::updateOrCreate(
            ['name' => 'Super Admin'], 
            ['guard_name' => 'web'] 
        );
        if(!$user)
        {
            $user = User::create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => 'password'
            ]);
            $user->assignRole('Super Admin');
        }
        $this->command->info("Admin Credentials, email: test@example.com , password: password .");
    }
}
