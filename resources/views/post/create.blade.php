@extends('layouts/master')
	@section('content')
<div class="row">
	<div class="col-md-12">
		<h1>Crear Post</h1>
	</div>
</div>
<div class="row">

	<div class="col-md-12">
		<div class="panel-body">
		{!! Form::open(['route' => 'post.store', 'method' => 'POST']) !!}
    		<div class="form-group">
    			{!! Form::label('title', 'Título') !!}
    			{!! Form::text('title', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el  Título'])!!}
    		</div>
    		<div class="form-group">
    			{!! Form::label('description', 'Descripción') !!}
    			{!! Form::textarea('description', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa una Descripción']) !!}
    		</div>
    		 <div class="form-group">
    			{!! Form::submit('Crear Post', ['class' => 'btn btn-info']) !!}

    		</div>
		{!! Form::close() !!}
		</div>
	</div>

</div>





@stop