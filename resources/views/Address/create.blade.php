@extends('.layout')
@section('header','Create address')
@section('newTask')
<section class=" flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
    <h1 class="text-3xl font-bold text-center text-gray-700 mt-10">Crete address</h1>
    <form class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" action="{{route('address.store')}}" method='post'>
        @csrf
        <div>
            <label for="name" class="font-medium text-sm text-gray-700">Street</label>
            <input id="name" name='street' type='input' class='rounded-md shadow-sm mt-1 block w-full p-2 border' placeholder="Street" />
        </div>
        <div class="mt-4">
            <label for="name" class="font-medium text-sm text-gray-700">City</label>
            <input id="name" type='input' name='city' class='rounded-md shadow-sm mt-1 block w-full p-2 border' placeholder="City"/>
        </div>
        <div>
            <label for="user" class="font-medium text-sm text-gray-700">Asign to user</label>
            <select id="user" name="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5 ">
                @each('partials.userOption',$users,'user')
            </select>
        </div>
        
        <div class="flex items-center justify-end mt-4">
            <button class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase transition ease-in-out duration-150">Create address
            </button>
        </div>
    </form>
</section>
@endsection
@section('currentUserTable')
<section class="mx-4 mt-4 ">
    <h1 class="text-3xl font-bold text-center text-gray-700 mt-10 mb-5">Address list</h1>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Street
                </th>
                <th scope="col" class="px-6 py-3">
                    City
                </th>
                <th scope="col" class="px-6 py-3">
                    User name
                </th>
            </tr>
        </thead>
        <tbody>
        @each('partials.addressTable', $addresses, 'address')
        </tbody>
    </table>
</section>
@endsection