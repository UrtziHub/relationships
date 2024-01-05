@extends('.layout')
@section('header','Asign user to address')
@section('newTask')
<div class="min-h-screen flex flex-col sm:justify-center items-center sm:pt-0 ">
    <h1 class="text-3xl font-bold text-center text-gray-700 mt-10">Asign user to address</h1>
    <form class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" action="{{route('address.update')}}" method='post'>
        @csrf
        @method('PUT')
        <div>
            <label for="user" class="font-medium text-sm text-gray-700">Address ID</label>
            <select id="user" name="address_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5 ">
                @each('partials.addressOption', $addresses, 'address')
            </select>
        </div>
        <div>
            <label for="user" class="font-medium text-sm text-gray-700">User name</label>
            <select id="user" name="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5 ">
                @each('partials.userOption', $users, 'user')
            </select>
        </div>
        <div class="flex items-center justify-end mt-4">
            <button class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase transition ease-in-out duration-150">Update user
            </button>
        </div>
    </form>
</div>
@endsection