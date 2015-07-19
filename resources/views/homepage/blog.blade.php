@extends('_layouts.default')

@section('content')


    {{--</div>--}}

    {{--<div class="col s12 m4 l3">--}}

    {{--<ul class="collapsible popout" data-collapsible="expandable">--}}

    {{--@foreach($types as $type)--}}
    {{--<li>--}}
    {{--<div class="collapsible-header waves-effect waves-teal"><i class="material-icons">filter_drama</i>{{ $type->name }}</div>--}}
    {{--<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>--}}
    {{--</li>--}}
    {{--@endforeach--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    <div class="ui vertical stripe segment">
        <div class="ui center aligned container">
            <table class="ui selectable inverted table">
                <tbody>

                @foreach ($articles as $article)
                    <tr>
                        <td class="left aligned"><a href="{{ URL('articles/'.$article->id) }}">{{$article->title}}</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>





@endsection