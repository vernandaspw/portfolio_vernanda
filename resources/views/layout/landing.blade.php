<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') Vernanda spw</title>
    @include('includes.meta')

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body>
    @include('includes.landing.nav')


    @yield('content')
    @include('includes.landing.footer')



    @stack('before-style')
    @include('includes.script')
    @stack('after-style')
</body>

</html>