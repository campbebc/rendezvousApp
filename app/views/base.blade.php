<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Laravel 4 - Tutorial
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSS are placed here -->
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/bootstrap-theme.css') }}
	{{ HTML::style('css/custom.css') }}
	{{ HTML::script('js/bootstrap.min.js') }} 

    <style>
        @section('styles')
            body {
                padding-top: 70px;
            }
        @show
        </style>

    </head>

    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Rendezvous</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="/"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="login">Login</a>
                    </li>
                    <li class="page-scroll">
                        <a href="events">Events</a>
                    </li>
                    <li class="page-scroll">
                        <a href="about">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


        <!-- Container -->
        <div class="container">

            <!-- Content -->
            @yield('content')
            <br></br>

        </div>

    <div class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container">
    <div class="wrapper">
  		<p class="grey_footer">Invite guests. Get responses. Done.</p>
  		<div class="push"></div>
 	</div>
	<div class="footer">
   		<p class="grey_footer">&copy; Rendezvous 2014</p>
 	</div>
 	</div>
 	</div>

        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery-1.11.1.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}

    </body>
</html>