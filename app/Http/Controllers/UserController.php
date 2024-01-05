<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $users = User::all();
        return view('page',['users' => $users]);
    }
    function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'date_of_birth' => 'required|date|before_or_equal:today',
            'gender' => 'required|in:male,female,other',
        ]);
    
        // Calculate age based on date_of_birth
        $dateOfBirth = $request->input('date_of_birth');
        $age = now()->diffInYears($dateOfBirth);
        
        //Merge, datu guztiak bateratu
        User::create(array_merge($request->all(), ['age' => $age]));
        return redirect()->route('index')->with('success', 'User created successfully.');
    }
    function show($id){

    }
    function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:male,female,other',
            // Add validation rules for other fields
        ]);
        

        $user = User::find($id);
        $user->update($request->all());
        $user->update(['age' => now()->diffInYears($user->date_of_birth)]);
        return redirect()->route('index')->with('success', 'User updated successfully.');
    }
    function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('deleted', 'User deleted successfully');
    }
    function edit($id){
        $user = User::findOrFail($id);
        return view('User.edit', ['user' => $user]);
    }
    function create(){
        return view('User.page');
    }
    
}
