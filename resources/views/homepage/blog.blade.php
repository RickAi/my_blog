@extends('_layouts.default')

@section('content')

    <style>

        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
        }

        .pagination > li {
            display: inline;
        }

        .pagination > li > a,
        .pagination > li > span {
            position: relative;
            float: left;
            padding: 6px 12px;
            line-height: 1.42857143;
            text-decoration: none;
            color: #337ab7;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            margin-left: -1px;
        }

        .pagination > li:first-child > a,
        .pagination > li:first-child > span {
            margin-left: 0;
            border-bottom-left-radius: 4px;
            border-top-left-radius: 4px;
        }

        .pagination > li:last-child > a,
        .pagination > li:last-child > span {
            border-bottom-right-radius: 4px;
            border-top-right-radius: 4px;
        }

        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
            color: #23527c;
            background-color: #eeeeee;
            border-color: #dddddd;
        }

        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            z-index: 2;
            color: #ffffff;
            background-color: #337ab7;
            border-color: #337ab7;
            cursor: default;
        }

        .pagination > .disabled > span,
        .pagination > .disabled > span:hover,
        .pagination > .disabled > span:focus,
        .pagination > .disabled > a,
        .pagination > .disabled > a:hover,
        .pagination > .disabled > a:focus {
            color: #777777;
            background-color: #ffffff;
            border-color: #dddddd;
            cursor: not-allowed;
        }

        .pagination-lg > li > a,
        .pagination-lg > li > span {
            padding: 10px 16px;
            font-size: 18px;
        }

        .pagination-lg > li:first-child > a,
        .pagination-lg > li:first-child > span {
            border-bottom-left-radius: 6px;
            border-top-left-radius: 6px;
        }

        .pagination-lg > li:last-child > a,
        .pagination-lg > li:last-child > span {
            border-bottom-right-radius: 6px;
            border-top-right-radius: 6px;
        }

        .pagination-sm > li > a,
        .pagination-sm > li > span {
            padding: 5px 10px;
            font-size: 12px;
        }

        .pagination-sm > li:first-child > a,
        .pagination-sm > li:first-child > span {
            border-bottom-left-radius: 3px;
            border-top-left-radius: 3px;
        }

        .pagination-sm > li:last-child > a,
        .pagination-sm > li:last-child > span {
            border-bottom-right-radius: 3px;
            border-top-right-radius: 3px;
        }

    </style>

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
                {!! $articles->render() !!}
            </div>

        </div>


        <div class="three wide column computer tablet only">

            @foreach($types as $type)

                <div class="ui styled fluid accordion">
                    <div class="active title">
                        <i class="dropdown icon"></i>
                        {{ $type->name." (".count($type->articles).")" }}
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
    </div>

@endsection