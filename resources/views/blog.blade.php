
@extends('_layouts.default')

@section('content')

    <div class="container">

        <ul class="collection">
            @foreach ($pages as $page)
                <li class="collection-item"><a href="{{ URL('pages/'.$page->id) }}">{{$page->title}}</a></li>
            @endforeach
        </ul>
    </div>

@endsection