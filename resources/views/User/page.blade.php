@extends('.layout')
@section('header','Create user')
@section('newTask')
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <h1 class="text-3xl font-bold text-center text-gray-700 mt-10">Create user</h1>
    <form class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" action="{{route('user.store')}}" method='post'>
        @csrf
        <div>
            <label for="name" class="font-medium text-sm text-gray-700">User Name</label>
            <input id="name" name='name' type='input' class='rounded-md shadow-sm mt-1 block w-full p-2 border' placeholder="User" />
        </div>
        <div class="mt-4">
            <label for="name" class="font-medium text-sm text-gray-700">Email</label>
            <input id="name" type='input' name='email' class='rounded-md shadow-sm mt-1 block w-full p-2 border' placeholder="user@gmail.com" />
        </div>
        <div>
            <label for="name" class="font-medium text-sm text-gray-700">Gender</label>
            <select id="countries" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5 ">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div>
            <label for="name" class="font-medium text-sm text-gray-700">Birth date</label>
            <input id="name" name='date_of_birth' type='date' class='rounded-md shadow-sm mt-1 block w-full p-2 border text-gray-400' placeholder="User" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <button class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase transition ease-in-out duration-150">Crete user
            </button>
        </div>
    </form>
</section>
@endsection