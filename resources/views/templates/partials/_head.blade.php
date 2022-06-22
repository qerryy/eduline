<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Laravel AJAX CRUD with Server Side Validation by IDStack">
    <meta name="author" content="IDStack">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('assets/img/icon.ico') }}">

    <title>Eduline</title>

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/vendor/datatables/datatables.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/navbar-fixed-top.css') }}" rel="stylesheet">

    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    @yield('style')

    <script src="{{ asset('assets/js/ie-emulation-modes-warning.js') }}"></script>

  </head>