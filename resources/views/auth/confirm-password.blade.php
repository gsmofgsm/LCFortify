<x-app-layout>
    <h2>Confirm Password</h2>

    @if ($errors->any())
        <div>
            <div>Something went wrong!</div>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/user/confirm-password" method="POST">
        @csrf

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <button>Confirm</button>
        </div>
    </form>
</x-app-layout>
