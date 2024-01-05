<form action="{{route('posts.show',$post)}}" method='get'>
@csrf
    <button type="submit" class="bg-white rounded w-96 cursor-pointer">
        <h1 class="text-3xl text-center">{{ $post->title }}</h1>
        <p>{{ $post->created_at->diffForHumans() }}</p>
        <h1 class="text-xl p-4">{{ $post->content }}</h1>
        <div class="text-xl p-4 flex gap-2">
        @foreach($post->subjects as $subject)
        <h1 for="subject{{ $subject->id }}" class="ml-2 bg-gray-200 rounded-full px-2">#{{ $subject->name }}</h1>
        @endforeach
        </div>
        <p class="text-right text-gray-600">{{ $post->user->name }}</p>
    </button>
</form>