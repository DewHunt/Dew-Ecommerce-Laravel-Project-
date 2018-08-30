<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Dew Ecommerce Site</title>

    {{-- Start CSS --}}
    @include('partials/styles')
    {{-- End CSS --}}
</head>

<body>
    <div class="wrapper">
        <!-- Start navigation -->
        @include('partials/nav')
        <!-- End Navigation -->

        @yield('content')

        {{-- Start Footer --}}
        @include('partials/footer')
        {{-- End Footer --}}
    </div>

    {{-- Start Java Script --}}
    @include('partials/scripts')
    {{-- End Java Script --}}
</body>

</html>
