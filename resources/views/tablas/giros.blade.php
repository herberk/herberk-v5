@extends('layouts.app')

@section('content')
    @include('layouts.Menus.menu_tablas')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-address-book" aria-hidden="true"></i><strong> Giros o actividades</strong></div>
                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message')}}</p>
                    @endif
                    <div class="panel-body">

                        @include('tablas.partials.search')
                        @include('tablas.partials.giros-tabla')
                        {!! $giros->appends(Request::only(['name','type']))->setPath('')->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection