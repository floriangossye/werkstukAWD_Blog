<!doctype html>
<html lang="en">
@include('partials._head')

<body>
<!-- bootstrap nav -->
@include('partials._nav')


<div class="container">
    @include('partials._messages')
    
    @yield('content')
    @include('partials._footer')
</div>


@include('partials._js')
@yield('scripts')
</body>
</html>