@extends('_layouts.default')

@section('content')

    <div class="ui container">
        <img class="ui fluid centered rounded image" src={{  str_replace("preview_", "", $picture->url) }}>
    </div>


@endsection