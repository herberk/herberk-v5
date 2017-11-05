{!! Form::model(Request::all(),['route'=> 'giros', 'method'=>'GET','class' =>'navbar-form navbar-left pull-right','role' =>'search'])!!}
    <a href="{{ url('/girosxls') }}" class="btn btn-sm  btn-success"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Exportar</a>
    {!! Form::text('codigo',null, ['class'=>'form-control','placeholder'=>'Codigo del giro']) !!}
    {!! Form::text('name',null, ['class'=>'form-control','placeholder'=>'Nombre del giro']) !!}
    {!! Form::select('type',config('options.desgiros'),null, ['class'=>'form-control']) !!}
     <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-search"></i> Buscar</button>
{!!Form::close()!!}