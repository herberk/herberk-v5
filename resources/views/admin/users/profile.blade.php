@extends('layouts.app')
@section('content')
    @include('layouts.Menus.menu_user')
     <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Perfil </div>
                    <div class="panel-body">
                        <form class="form-horizontal"
                              role="form"
                              method="POST"
                              action="{{ url('profile') }}"
                              enctype="multipart/form-data">
                           {{ method_field('PUT')}}
                            {{ csrf_field() }}
                                   <!--Avatar -->
                            <div class="col-md-2">
                                @if($profile->avatar)
                                    <a href="#" class="thumbnail">
                                    <img src="{{ url('profile/avatar') }}">
                                    </a>
                                @endif
                            </div>
                            <!-- ayuda -->
                            <div class="col-md-10 pull-right">
                                    <div class="well well-sm bg-info text-center "><small>Debe ser un archivo de imagen de dimensiones 150x150 pixeles </small> </div>
                            </div>
                            <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                                <br><br><br>
                                <label for="avatar" class="col-md-2 control-label">Avatar</label>

                                <div class="col-md-6">
                                    <input id="avatar" type="file"  name="avatar" >
                                    @if ($errors->has('avatar'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!-- nickname -->
                            <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">
                                <label for="nickname" class="col-md-4 control-label">Nombre Corto</label>
                                <div class="col-md-6">
                                    <input id="nickname" type="text" class="form-control" name="nickname" value="{{old("nickname", $user->nickname)}}" required>
                                    @if ($errors->has('nickname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!-- Usuario Bloqueado -->
                            <div class="form-group">
                                <label for="sw-bloqueado" class="col-md-4 control-label">Usuario Bloqueado</label>
                                <div class="col-md-6">
                                    <div class="radio-inline">
                                        <label>
                                            <input type="radio" name="opciones" value=" {{old("active", $user->active)}}">Si
                                        </label>
                                    </div>
                                    <div class="radio-inline">
                                        <label>
                                            <input checked="checked" type="radio" name="opciones"  value=" {{old("active", $user->active)}}">No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Tipo de Usuario -->
                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="tipo" class="col-md-4 control-label">Seleccionar Tipo</label>
                                <div class="col-md-6">
                                    {!! Form::select('type',config('options.types'),null, ['class'=>'form-control']) !!}
                                    @if ($errors->has('type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!-- Nombre Usuario -->
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombre</label>
                                <div class="col-md-6">
                                    <input type="text" name="name" value="{{ old('name', $user->name)}}" class="form-control" required>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!--  Email del Usuario -->
                            <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                   {{-- <imput id="email" name="email" class="form-control">{{old("email", $user->email)}}</imput> --}}
                                    <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!--  notas del Usuario -->
                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Descripcion</label>

                                <div class="col-md-6">
                                    <textarea id="description" name="description" class="form-control">{{old("description", $profile->description)}}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Actualiza perfil
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
