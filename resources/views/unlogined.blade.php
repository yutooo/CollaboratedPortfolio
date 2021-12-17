<!DOCTYPE html>

<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>welcome</title>
    </head>

    <div>
        @if (Route::has('login'))
        <div>
            @auth
                <h1><a href="{{ url('/ticketAll') }}" >ticketAll</a></h1>
            @else
                <h1><a href="{{ route('login') }}" >Log in</a></h1>

                @if (Route::has('register'))
                    <h1><a href="{{ route('register') }}" >Register</a></h1>
                @endif
            @endauth
        </div>
        @endif
    </div>

</html>
