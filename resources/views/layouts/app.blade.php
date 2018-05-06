<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Acme</title>
    <link rel="stylesheet" href="/css/app.css">

</head>

<body>
    @include('inc.navbar')
    <div class="container">

        @if(Request::is('/'))
        @include('inc.showcase')
        @endif
        @include('inc.errors')
        <div class="row">
            <div class="col-md-8 col-lg-8" style="margin-top: 15px">
                @yield('content')
            </div>
            <div class="col-md-4 col-lg-4">
                @include('inc.sidebar')
            </div>

        </div>

    </div>
    @include('inc.footer')
</body>
</html>