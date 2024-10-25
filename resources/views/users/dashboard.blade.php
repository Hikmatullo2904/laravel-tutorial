<x-layout>
    <h1 class="title">Hello Mr.{{auth()->user()->name}}</h1>
    <div class="card mb-4">
        <h2 class="font-bold mb-4">Create a new Post</h2>

        @if(session('success'))
            <div>
                <p>{{session('success')}}</p>
            </div>
        @endif

        <form action="{{route('posts.store')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="title" class="label">Title</label>
                <input type="text" name="title" id="title" class="input">
                @error('title')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="body" class="label">Body</label>
                <textarea name="body" id="body" class="input" rows="5">{{old('body')}}</textarea>
                @error('body')
                {{$message}}
                @enderror
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</x-layout>
