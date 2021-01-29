<x-guest-layout>
    <h2>Verify Email</h2>

    <div>
        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link
        we just emailed to you? If you didn\'t receive the email, we will gladly send you another.
    </div>

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

    @if (session('status') === 'verification-link-sent')
        <div>
            A new verification link has been send to the email address you provided during registration.
        </div>
    @endif

    <form action="{{ route('verification.send') }}" method="POST">
        @csrf

        <div>
            <button type="submit">Resend Verification Email</button>
        </div>
    </form>

    <form action="/logout" method="POST">
        @csrf

        <div>
            <button type="submit">Logout</button>
        </div>
    </form>
</x-guest-layout>
