<x-layout>
    <h1 class="title">Welcome back</h1>
    <div class="mx-auto max-w-screen-sm card">

        <form action="{{route('login')}}" method="post">

            @csrf

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

            <div class="mb-4">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember" class="label">Remember me</label>
            </div>

            @error('failed')
            {{$message}}
            @enderror

            {{-- login button --}}
            <button class="btn">Login</button>

        </form>

    </div>
</x-layout>
