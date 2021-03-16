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
    @yield('content')

    @stack('before-style')
    @include('includes.script')
    @stack('after-style')
</body>

</html>