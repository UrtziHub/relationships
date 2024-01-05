@extends('.layout')
@section('header','Create posts')
@section('newTask')
<section class=" flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
    <h1 class="text-3xl font-bold text-center text-gray-700 mt-10">Create a post</h1>
    <form class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" action="{{route('posts.store')}}" method='post'>
        @csrf
        <div>
            <label for="name" class="font-medium text-sm text-gray-700">Title</label>
            <input id="name" name='title' type='input' class='rounded-md shadow-sm mt-1 block w-full p-2 border' placeholder="Title" />
        </div>
        <div class="mt-4">
            <label for="name" class="font-medium text-sm text-gray-700">Content</label>
            <textarea id="name" type='input' name='content' class='rounded-md shadow-sm mt-1 block w-full p-2 border' placeholder="Comment..." cols="30" rows="10"></textarea>
        </div>
        <label for="user" class="font-medium text-sm text-gray-700">Using user</label>
        <select id="user" name="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5 ">
            @each('partials.userOption',$users,'user')
        </select>
        <div class="flex items-center justify-end mt-4">
            <button class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase transition ease-in-out duration-150">Send post
            </button>
        </div>
    </form>
</section>
@endsection