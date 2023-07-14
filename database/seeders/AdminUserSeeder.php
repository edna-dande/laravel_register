<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('name', 'Admin')->where('guard_name', 'web')->first();

        if (!$adminRole) {
            // Create the 'Admin' role
            $adminRole = Role::create([
                'name' => 'Admin',
                'guard_name' => 'web',
            ]);
        } else {
            // Role already exists, update any necessary properties
            $adminRole->update([
                'name' => 'Updated Admin', // Update the role name
                'description' => 'Updated description', // Update other properties as needed
            ]);
        
        $user = User::create([
            'name' => 'joy', 
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        $role = Role::create(['name' => 'Admin']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
    }
}