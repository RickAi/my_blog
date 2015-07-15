@extends('_layouts.default')

@section('content')

    <div class="row">

        <div class="col s12 m8 l9">

            <div class="container">
                <div class="card">
                    <div class="collection card-content">
                        @foreach ($pages as $page)
                            <a class="collection-item" href="{{ URL('pages/'.$page->id) }}">{{$page->title}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="col s12 m4 l3">


            <div class="container">
            <div class="card">

                <div class="card-content">

                    I think that is it
                </div>

            </div>
            </div>


        </div>

    </div>

@endsection