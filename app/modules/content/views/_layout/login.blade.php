<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Laravel Modules Example</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <!-- Notifications -->
            @include('content::_partial/notifications')
            <!-- ./ notifications -->

            <!-- Content -->
            @yield('main')
            <!-- ./ content -->
            <hr>

            <footer>
                <p>&copy; 2014</p>
            </footer>
        </div>

    </body>
</html>
