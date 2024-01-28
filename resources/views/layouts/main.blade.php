<!doctype html>
<html lang="en">


<!-- ======================== head ========================= -->
@include('layouts.head')

<body>
    <!-- ======================== navbar ========================= -->
    @include('layouts.navbar')

    @yield('content')

    <!-- ======================= Footer ========================= -->
    @include('layouts.footer')

    <!-- ===================== Script ========================= -->
    @include('layouts.script')
    @stack('script');
</body>

</html>
