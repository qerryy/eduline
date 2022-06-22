<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('templates.partials._head')

<body>

    @include('templates.partials._topNav')

    <main class="py-4">

        @yield('content')

    </main>

    @include('templates._modal')
    
    @include('templates.partials._script')

</body>
</html>