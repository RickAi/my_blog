@extends('_layouts.default')

@section('content')

    <div class="ui centered grid">
        <div class="eight wide column">
            <div class="ui vertical stripe segment">

                <div class="ui center aligned container">
                    <table class="ui selectable table">
                        <tbody>

                        @foreach ($articles as $article)
                            <tr>
                                <td class="left aligned"><a
                                            href="{{ URL('articles/'.$article->id) }}">{{$article->title}}</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="three wide column">

            @foreach($types as $type)

                <div class="ui styled fluid accordion">
                    <div class="active title">
                        <i class="dropdown icon"></i>
                        {{ $type->name }}
                    </div>
                    <div class="content">
                        <div class="ui divided items">

                            @foreach ($type->articles as $article)
                                <div class="item">
                                    <a href="{{ URL('articles/'.$article->id) }}">{{$article->title}}</a>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            @endforeach
        </div>

@endsection