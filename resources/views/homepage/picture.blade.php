@extends('_layouts.default')

@section('content')

    <div class="ui container">

        <div class="ui vertical stripe segment">


        @foreach($pictures as $picture)

            <img class="ui fluid image" src="{{ $picture->url  }}">

            <br/>

        @endforeach

            {!! $pictures->render() !!}

        </div>

    </div>


@endsection