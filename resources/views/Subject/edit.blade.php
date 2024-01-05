@extends('.layout')
@section('header','Edit address')
@section('newTask')
<div class="min-h-screen flex flex-col sm:justify-center items-center sm:pt-0 ">
    <h1 class="text-3xl font-bold text-center text-gray-700 mt-10">Edit post</h1>
    <form class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" action="{{route('subjects.update',$subject) }}" method='post'>
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="font-medium text-sm text-gray-700">Street</label>
            <input id="name" name='name' value="{{$subject->name}}" type='input' class='rounded-md shadow-sm mt-1 block w-full p-2 border' placeholder="Street" />
        </div>
        
        <div class="flex items-center justify-end mt-4">
            <button class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase transition ease-in-out duration-150">Update user
            </button>
        </div>
    </form>
</div>
@endsection