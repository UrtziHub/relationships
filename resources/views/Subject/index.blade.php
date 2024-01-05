@extends('.layout')
@section('header','Posts')
@section('newTask')
<section class=" flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
    <h1 class="text-3xl font-bold text-center text-gray-700 mt-10">Add subject</h1>
    <form class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" action="{{ route('subjects.store') }}" method="post">
        @csrf
        <div>
            <label for="name" class="font-medium text-sm text-gray-700">Subject Name</label>
            <input id="name" name="name" type="text" class="rounded-md shadow-sm mt-1 block w-full p-2 border" placeholder="Subject Name" />
        </div>
        <!-- Add other subject attributes as needed -->
        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase transition ease-in-out duration-150">Create Subject</button>
        </div>
    </form>
</section>
@endsection
@section('currentUserTable')
<section class="mx-4 mt-4 ">
    <h1 class="text-3xl font-bold text-center text-gray-700 mt-10 mb-5">Subject list</h1>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    User name
                </th>
                <th scope="col" class="px-6 py-3">
                    Age
                </th>
                <th scope="col" class="px-6 py-3">
                    Edit
                </th>
                <th scope="col" class="px-6 py-3">
                    Delete
                </th>
            </tr>
        </thead>
        <tbody>
        @each('partials.subjectTable', $subjects, 'subject')
        </tbody>
    </table>
</section>
@endsection