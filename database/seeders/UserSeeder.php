<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'Admin User',
            'email' => 'admin@admin.com',
            'role_id' => 1,
            'password' => Hash::make('admin')]);
        User::create([
            'name'=> 'Guest User',
            'email' => 'user@user.com',
            'role_id' => 2,
            'password' => Hash::make('user')]);
    }
}
