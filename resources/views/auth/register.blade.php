<x-layout>
    <h1 class="title">Register new account</h1>
    <div class="mx-auto max-w-screen-sm card">

        <form action="{{route('register')}}" method="post">

            @csrf
            <div class="mb-4">
                <label for="name" class="label">Name</label>
                <input type="text" name="name" id="name" class="input" placeholder="Enter your name">
                @error('name')
                    {{$message}}
                @enderror
            </div>


            {{-- email --}}
            <div class="mb-4">
                <label for="email" class="label">Email</label>
                <input type="email" name="email" id="email" class="input" placeholder="Enter your email" >
            </div>

            {{-- password --}}
            <div class="mb-4">
                <label for="password" class="label">Password</label>
                <input type="password" name="password" id="password" class="input" placeholder="Enter your password" >
                @error('password')
                    {{$message}}
                @enderror
            </div>

            {{-- confirm password --}}
            <div class="mb-4">
                <label for="password_confirmation" class="label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="input" placeholder="Confirm your password" >
            </div>

            {{-- submit button --}}
            <button class="btn">Register</button>
        </form>

    </div>
</x-layout>
