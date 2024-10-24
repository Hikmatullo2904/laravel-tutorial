
<x-layout>
    <h1 class="title">Latest Posts</h1>

    @foreach($posts as $post)
        <h2 class="font-bold text-xl">{{$post ->title}}</h2>
        <div class="text-xs font-light mb-4">
            <span class="font-semibold">Posted By: </span>
            <a href="" class="text-blue-500 hover:text-blue-600"><Username></Username></a>
        </div>

        <p>{{$post->body}}</p>
    @endforeach
</x-layout>
