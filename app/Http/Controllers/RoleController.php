<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function assignRoles(Request $request, User $user)
    {
        $roles = Role::all(); // Get all available roles

        return view('assign_roles', compact('user', 'roles'));
    }

    public function storeAssignedRoles(Request $request, User $user)
    {
        $user->roles()->sync($request->roles); // Assign the selected roles to the user

        return redirect()->back()->with('success', 'Roles assigned successfully.');
    }
}
