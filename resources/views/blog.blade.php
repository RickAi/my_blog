@extends('_layouts.default')

@section('content')

    <div class="row">

        <div class="col s12 m8 l9">

            <div class="container">
                <div class="card">
                    <div class="collection card-content">
                        @foreach ($articles as $article)
                            <a class="collection-item light-blue-text text-darken-4 waves-effect waves-teal"
                               href="{{ URL('articles/'.$article->id) }}">{{$article->title}}</a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

        <div class="col s12 m4 l3">

            <ul class="collapsible popout" data-collapsible="expandable">

                @foreach($types as $type)
                <li>
                    <div class="collapsible-header waves-effect waves-teal"><i class="material-icons">filter_drama</i>{{ $type->name }}</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection