<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts._head')
<body>
    <div id="app">
        
        @include('layouts._topNav')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
