@extends('layout')
@section('header','Edit user')
@section('newTask')
<section class=" flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
<h1 class="text-3xl font-bold text-center text-gray-700 mt-10">Edit user</h1>
<form class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" method="POST" action="{{ route('user.update', $user->id) }}">
        @csrf
        @method('PUT') <!-- Use the PUT method for updating -->

        <div>
            <label for="name" class="font-medium text-sm text-gray-700">User Name</label>
            <input id="name" name='name' type='input' class='rounded-md shadow-sm mt-1 block w-full p-2 border' value="{{$user->name}}"/>
        </div>
        <div class="mt-4">
            <label for="name" class="font-medium text-sm text-gray-700">Email</label>
            <input id="name" type='input' name='email' class='rounded-md shadow-sm mt-1 block w-full p-2 border' value="{{$user->email}}"/>
        
        </div>
        <div>
            <label for="name" class="font-medium text-sm text-gray-700">Gender</label>
            <select id="countries" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5 ">
                <option value="{{$user->gender}}">{{$user->gender}}</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            
        </div>
        <div>
            <label for="name" class="font-medium text-sm text-gray-700">Birth date</label>
            <input id="name" name='date_of_birth' type='date' class='rounded-md shadow-sm mt-1 block w-full p-2 border text-gray-400' value="{{$user->date_of_birth}}"/>
        </div>
        <div class="flex items-center justify-end mt-4">
            <button class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase transition ease-in-out duration-150">Update user
            </button>
        </div>
    </form>
</section>
@endsection


