@extends('_layouts.default')

@section('content')

    <div class="ui container">
        <div class="ui piled very padded text segment">
            <img class="ui small circular image right floated" src="/images/head_portrait.jpg">

            {!! $about_me_content !!}

        </div>
    </div>


@endsection