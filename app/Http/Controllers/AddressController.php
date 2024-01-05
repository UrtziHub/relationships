<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Debug\VirtualRequestStack;

class AddressController extends Controller
{
    function index(){
        $users = User::all();
        $addresses = Address::all();
        return view('Address.create',['users' => $users,'addresses' => $addresses]);
    }
    function store(Request $request){
        $request->validate([
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
        ]);
        Address::create($request->all());
        return redirect()->route('address.index')->with('success', 'Address created successfully.');
    }
    function update(Request $request, $id = NULL){ //ID is the address
        if($id === NULL){
            $id = $request->input('address_id');
            $address = Address::find($id);
            $address->update($request->all());
            return redirect()->route('address.index')->with('success', 'Address updated successfully.');
        }

        $request->validate([
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ]);
        
        $address = Address::find($id);
        $address->update($request->all());
        return redirect()->route('address.index')->with('success', 'Address updated successfully.');
    }
    function destroy($id){
        $address = Address::findOrFail($id);
        $address->delete();
        return redirect()->back()->with('deleted', 'Address deleted successfully');
    }
    function edit($id){
        $address = Address::findOrFail($id);
        $users = User::all();
        return view('Address.edit', ['address' => $address,'users' => $users]);
    }
    function asign(){
        $addresses = Address::all();
        $users = User::all();
        return view('Address.asignUser', ['addresses' => $addresses,'users' => $users]);
    }
}
