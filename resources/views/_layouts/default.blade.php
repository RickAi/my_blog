<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!-- Fonts -->
    <link href='http://fonts.useso.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    {{--JavaScript--}}
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src={{ URL::asset('js/materialize.js') }}></script>
    <script src={{ URL::asset('js/init.js') }}></script>

</head>
<body>

<div class="navbar-fixed">
    <nav class="light-blue darken-4" role="navigation">
        <ul id="movie_dropdown" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li><a href="#!">three</a></li>
        </ul>

        <div class="nav-wrapper container">
            <ul class="right hide-on-med-and-down">
                <li><a class="white-text" href="{{ URL('/') }}">Homepage</a></li>
                <li><a class="white-text" href="{{ URL('/blog') }}">Blog</a></li>
                <li><a class="white-text" href="#">Book</a></li>
                <li><a class="white-text" href="#">Fitness</a></li>
                <li><a class="white-text" href="#">Project</a></li>
                <li><a class="white-text dropdown-button" data-activates="movie_dropdown" href="#">Movie<i
                                class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="white-text " href="#">Me</a></li>
            </ul>
        </div>
    </nav>
</div>

@yield('content')

<footer class="page-footer light-blue darken-4">
    <div class="footer-copyright">
        <div class="container">
            <a class="white-text" href="{{ URL('/me')  }}">© 2015 Yogi Ai</a>
        </div>
    </div>
</footer>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large light-blue darken-4">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li><a class="btn-floating red tooltipped"  data-position="left" data-tooltip="write article"><i class="material-icons">insert_chart</i></a></li>
        <li><a class="btn-floating yellow darken-1 tooltipped" data-position="left" data-tooltip="create blog tag"><i class="material-icons">format_quote</i></a></li>
        <li><a class="btn-floating green tooltipped"  data-position="left" data-tooltip="I am tooltip"><i class="material-icons">publish</i></a></li>
        <li><a class="btn-floating blue tooltipped"  data-position="left" data-tooltip="I am tooltip"><i class="material-icons">attach_file</i></a></li>
    </ul>
</div>

</body>
</html>