<html>
    <head>
        <title>This is title</title>
    </head>

    <body>

        @section('sidebar')
            This is the master sidebar.
        @show

        @yield('content')

    </body>

</html>
