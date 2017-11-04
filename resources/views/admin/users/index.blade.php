@extends('layouts.app')
@section('content')
@include('layouts.Menus.menu_user')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-male"></i><strong> Usuarios</strong></div>
                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message')}}</p>
                    @endif

                    <div class="panel-body">
                        @include('admin.users.partials.search')

                          <p><!--<b>Hay  Usuarios&nbsp;--> </b>
                             <a href="{{ route('usersxls') }}" class="btn btn-sm  btn-success"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Exportar Xls </a>
                             <a href="{{ url('/register') }}" class="btn btn-sm  btn-primary "><i class="glyphicon glyphicon-plus"></i> Nuevo Usuario</a>
                        </p>

                        @include('admin.users.partials.table')

                        {!! $users->appends(Request::only(['name','type']))->setPath('')->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::open(['route' => ['users.destroy', ':USER_ID'], 'method' => 'DELETE','id'=>'form-delete']) !!}
    {!! Form::close() !!}
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.btn-delete').click(function (e) {
                e.preventDefault();
                var row = $(this).parents('tr');
                var id = row.data('id');
                var form = $('#form-delete');
                var url = form.attr('action').replace(':USER_ID', id);
                var data = form.serialize();

                row.fadeOut();

                $.post(url, data, function (result) {
                    alert(result.message);
                }).fail(function () {
                    alert('El usuario NO fue eliminado');
                    row.show();
                });
            });
        });

    </script>
@endsection