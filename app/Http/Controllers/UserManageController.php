<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class UserManageController extends Controller
{
    public function index(): View
    {
        $users = User::all();
        return view('layout.main', compact('users'));
    }

    public function create(Request $request): RedirectResponse
    {
        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->phone_number = $request->input('phone_number');
        $user->address = $request->input('address');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password')); // Hash the password for security
        $user->created_by = $request->input('created_by');
        $user->updated_by = $request->input('updated_by');
        $user->save(); // Save the user to the database

        return redirect('/user');
        // Show the user creation form
    }


    public function showForm(): View
    {
        $users = User::all();
        return view('layout.main', compact('users'), ['isShow' => true]);
    }

    public function show($id)
    {
        // Display a specific user's details
    }

    public function edit($id)
    {
        $userFormData = User::find($id);
        return redirect()->route('user.index')->with(['userFormData' => $userFormData, 'isShow' => true]);
    }

    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->phone_number = $request->input('phone_number');
        $user->address = $request->input('address');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password')); // Hash the password for security
        $user->created_by = $request->input('created_by');
        $user->updated_by = $request->input('updated_by');
        $user->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }

    public function close(): RedirectResponse
    {
        return redirect('/user');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
        }
        return redirect('/user');
    }
}
