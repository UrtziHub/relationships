@extends('.layout')
@section('header','Posts')
@section('newTask')
<section class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
    <h1 class="text-3xl font-bold text-center text-gray-700 mt-10">Create a post</h1>
    <form class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" action="{{ route('posts.store') }}" method='post'>
        @csrf
        <div>
            <label for="title" class="font-medium text-sm text-gray-700">Title</label>
            <input id="title" name='title' type='input' class='rounded-md shadow-sm mt-1 block w-full p-2 border' placeholder="Title" />
        </div>
        <div class="mt-4">
            <label for="content" class="font-medium text-sm text-gray-700">Content</label>
            <textarea id="content" type='input' name='content' class='rounded-md shadow-sm mt-1 block w-full p-2 border' placeholder="Comment..." cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="user" class="font-medium text-sm text-gray-700">Using user</label>
            <select id="user" name="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5 ">
                @each('partials.userOption', $users, 'user')
            </select>
        </div>
        <div>
            <label class="font-medium text-sm text-gray-700">Subjects</label>
            @foreach($subjects as $subject)
                <div class="flex items-center">
                    <input type="checkbox" id="subject{{ $subject->id }}" name="subjects[]" value="{{ $subject->id }}">
                    <label for="subject{{ $subject->id }}" class="ml-2">{{ $subject->name }}</label>
                </div>
            @endforeach
        </div>
        <div class="flex items-center justify-end mt-4">
            <button class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase transition ease-in-out duration-150">Send post</button>
        </div>
    </form>
</section>
@endsection
@section('currentUserTable')
<section class="flex flex-col justify-center items-center pt-6 sm:pt-10 lg:pt-16">
    <h1 class="text-3xl font-bold text-center text-gray-700 mb-6">POSTS</h1>
    <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @each('partials.postsCard', $posts, 'post')
    </div>
</section>
@endsection