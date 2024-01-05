@extends('.layout')
@section('header','Post')
@section('newTask')
<section class=" flex flex-col sm:justify-center items-center pt-6 sm:pt-0 mx-4 mt-4">
<h1 class="text-3xl font-bold text-center text-gray-700 mt-10 mb-5">Post table</h1>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Comment
                </th>
                <th scope="col" class="px-6 py-3">
                    User ID
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="odd:bg-white even:bg-gray-50 border-b dark:border-gray-200 text-gray-700 text-lg">
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->user_id }}</td>
                <td>
                    <form action="{{ route('posts.edit', ['post' => $post]) }}" method="get">
                        @csrf
                        @method('GET')
                        <button type="submit" class="text-green-500 font font-semibold">🔧 Edit</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('posts.destroy', ['post' => $post]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 font font-semibold">🗑 Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</section>
@endsection