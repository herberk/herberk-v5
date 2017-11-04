@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cambie su Contraseña</div>
                    <div class="panel-body">

                        @include('admin.users.partials.errors')
                        @include('admin.users.partials.success')
                        <form class="form-horizontal" method="POST" action="{{ url('postpasschange') }}">

                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-md-4 control-label">@lang('passwords.current_password')</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="current_password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">@lang('passwords.new_password')</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">@lang('passwords.password_confirmation')</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                                        @lang('passwords.change_button')
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection