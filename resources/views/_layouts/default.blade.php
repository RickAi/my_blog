<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>燃冰非冰 | Yogi Ai</title>

    {{--CSS--}}
    <link href="/semantic/semantic.css" type="text/css" rel="stylesheet"/>

    {{--JavaScript--}}
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="/semantic/semantic.js"></script>
    <script src="/semantic/init.js"></script>

</head>

<style type="text/css">

    .hidden.menu {
        display: none;
    }


</style>

<body>

<!-- Following Menu -->
<div class="ui large top fixed inverted hidden menu computer tablet only">
    <div class="ui container">
        <a href="/blog" class="item">Blog</a>
        <a class="item">Project</a>
        <a href="/pictures" class="item">Picture</a>
        <a class="item">Book</a>
        <a class="item">Movie</a>
        <a class="item">Music</a>
        <a class="item">Fitness</a>
        <a href="/me" class="item">About Me</a>
    </div>
</div>

<div class="pusher">
    <div class="ui inverted vertical masthead center aligned segment computer tablet only">
        <div class="ui container">
            <div class="ui large secondary inverted menu">
                <a href="/blog" class="item">Blog</a>
                <a class="item">Project</a>
                <a href="/pictures" class="item">Picture</a>
                <a class="item">Book</a>
                <a class="item">Movie</a>
                <a class="item">Music</a>
                <a class="item">Fitness</a>
                <a href="/me" class="item">About Me</a>
            </div>
        </div>
    </div>

    @yield('content')

</div>

</body>
</html>