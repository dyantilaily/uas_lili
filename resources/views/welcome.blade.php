@extends('layouts.app')

@section('content')

<body class="text-center">
    <main class="form-signin w-25 m-auto">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <img class="mb-4" src="{{ asset('icons/favicon.png') }}" alt="" width="100" height="100">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="floatingInput" required autocomplete="email" autofocus placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-floating mb-5">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" required autocomplete="current-password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
        <div class="mt-3">
            <a class="mt-4" href="{{ route('register') }}">Don't Have Account ? {{ __('Register') }}</a>
        </div>
    </main>

</body>
@endsection