<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>बैठक | Meeting</title>
</head>

<body class="container mx-auto px-4 sm:px-6 lg:px-8 flex min-h-screen flex-col">

    <nav class="flex justify-between items-center h-[6rem]">
        The Navbar
    </nav>

    <main class="flex-auto">
        @yield('content')
    </main>

    <footer class="">
        The Footer
    </footer>
</body>

</html>
