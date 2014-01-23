
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

        <title></title>

        <!-- Bootstrap core CSS -->
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-responsive.css') }}
        <!-- Add custom CSS here -->
        {{ HTML::style('css/sb-admin.css') }}
        {{ HTML::style('font-awesome/css/font-awesome.min.css') }}
        <!-- Page Specific CSS -->
        {{ HTML::style('http://cdn.oesmith.co.uk/morris-0.4.3.min.css') }}
        <style type="text/css">
            @section('styles')
            @show
        </style>

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">FraudChecker</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="<?php echo url('admin/login') ?>"><?php echo trans('Admin')?></a></li>
                    </ul>
                </div>
            </div>
        </div>

        @yield('jumbotron');

        <div class="container">
            <!-- content -->
            @yield('content')
            <!-- end content -->
            <footer>
                <p>&copy; Company 2013</p>
            </footer>
        </div> <!-- /container -->


        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery-1.10.2.js') }}
        {{ HTML::script('js/bootstrap.js') }}

        <!-- Page Specific Plugins -->
        {{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') }}
        {{ HTML::script('http://cdn.oesmith.co.uk/morris-0.4.3.min.js') }}
        {{ HTML::script('js/morris/chart-data-morris.js') }}
        {{ HTML::script('js/tablesorter/jquery.tablesorter.js') }}
        {{ HTML::script('js/tablesorter/tables.js') }}
    </body>
</html>
