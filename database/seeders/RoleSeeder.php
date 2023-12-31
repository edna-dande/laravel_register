<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Admin', 'slug' => 'admin', 'description' => 'Administrator role']);
        Role::create(['name' => 'User', 'slug' => 'user', 'description' => 'Regular user role']);
    }
}
