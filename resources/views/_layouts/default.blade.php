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

<nav class="white" role="navigation">
    <ul id="movie_dropdown" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li><a href="#!">three</a></li>
    </ul>

    <div class="nav-wrapper container">
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ URL('/') }}">Homepage</a> </li>
            <li><a href="{{ URL('/blog') }}">Blog</a></li>
            <li><a href="#">Book</a></li>
            <li><a href="#">Fitness</a></li>
            <li><a href="#">Project</a></li>
            <li><a class="dropdown-button" data-activates="movie_dropdown" href="#">Movie<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="#">Me</a></li>
        </ul>
    </div>
</nav>

@yield('content')

<footer class="page-footer light-blue darken-4">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Company Bio</h5>
                <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <a class="brown-text text-lighten-3" href="http://materializecss.com"></a>
        </div>
    </div>
</footer>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large light-blue darken-4">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
        <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
        <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
        <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
</div>

</body>
</html>