<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'Create', 'slug' => 'create', 'description' => 'Create permission']);
        Permission::create(['name' => 'Read', 'slug' => 'read', 'description' => 'Read permission']);
        Permission::create(['name' => 'Update', 'slug' => 'update', 'description' => 'Update permission']);
        Permission::create(['name' => 'Delete', 'slug' => 'delete', 'description' => 'Delete permission']);
    }
}
