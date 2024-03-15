<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UsersController extends Controller
{
public function getUsers()
{
    $users = User::all(); // Retrieve all users from the database

    // Transform the user data into the format expected by DataTables
    $formattedUsers = $users->map(function ($user) {
        return [
        'id' => $user->id,
        'name' => $user->name,
        'email' => $user->email,
        'status' => (isset($user->status) && $user->status == 1) ? '<label class="badge badge-success">Active</label>' :( isset($user->status) && $user->status == 0 ? '<label class="badge badge-danger">Inactive</label>' : '<label class="badge badge-warning">N/A</label>'),
        'country' => ($user->country)?$user->country:'N/A',
        'created_at' => $user->created_at->format('Y-m-d H:i:s'),
        'updated_at' => $user->updated_at->format('Y-m-d H:i:s'),
        'actions' => [
                'edit' => route('user.edit', $user->id), // Example edit route
                'delete' => route('user.destroy', $user->id), // Example delete route
                // Add more actions as needed
            ],
        ];
    });
    return response()->json($formattedUsers);
}
}