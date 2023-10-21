<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
class UserManageController extends Controller
{
    public function index():View
    {
        $users = User::all(); // Retrieve all users from the 'users' table
        return view('layout.main', compact('users')); // Pass the users data to a view
        // Display a list of users
    }

    public function create()
    {

        return view('user.layout');
        // Show the user creation form
    }

    public function store(Request $request): RedirectResponse
    {
        var_dump($request);
        return redirect()->route('layout.main');
        // Handle the user creation form submission
    }

    public function show($id)
    {
        // Display a specific user's details
    }

    public function edit($id)
    {

        return view('user.createupdate',['id'=>$id]);
        // Show the user edit form
    }

    public function update(Request $request, $id)
    {
        // Handle the user update form submission
    }

    public function destroy($id)
    {
        // Delete a user
    }
}
