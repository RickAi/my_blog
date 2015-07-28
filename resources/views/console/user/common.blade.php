@extends('console.app')

@section('modules')
<div class="container-fluid">


    <div class="row">

        <div class="col-md-2">
            @include('console.user._menu')
        </div>

        @yield('content')

    </div>
</div>
@endsection
