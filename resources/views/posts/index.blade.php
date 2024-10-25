
<x-layout>
    <h1 class="title">Latest Posts</h1>
    <div class="grid grid-cols-2 gap-6">
        @foreach($posts as $post)
            <h2 class="font-bold text-xl">{{$post ->title}}</h2>
            <div class="text-xs font-light mb-4">
                <span class="font-semibold">Posted {{$post -> created_at -> diffForHumans()}} By: </span>
                <a href="" class="text-blue-500 hover:text-blue-600">Username</a>
            </div>

            <p>{{Str::words($post->body, 10)}}</p>
        @endforeach
    </div>
    <div>
        {{$posts->links()}}
    </div>
</x-layout>
