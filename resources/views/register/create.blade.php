<x-layout>
    <main>
        <form action="/register" method="post">
            @csrf
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required value="{{ old('username') }}">
            @error('username')
                <p>{{$message}}</p>
            @enderror

            <label for="email"></label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <p>{{$message}}</p>
            @enderror

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <p>{{$message}}</p>
            @enderror
            <input type="submit">
        </form>
    </main>
</x-layout>
