@extends('layouts/master')
 {!!Html::style('css/estilo.css')!!}

	@section('content')
<div class="row">
        <div class="col-md-6">
            <div class="panel-body">
            {!! Form::model($post,[ 'route' => ['post.show', $post->id], 'method' => 'POST']) !!}

    
                <h3 class="info"><strong>Título:</strong>&nbsp;&nbsp;{{$post->title}}</h3>
                <h3 class="info"><strong>Descripción:</strong>&nbsp;&nbsp;{{$post->description}}</h3>
                <h3 class="info"><strong>Creado el:</strong>&nbsp;&nbsp;{{ $post->created_at->format('d-m-Y')}}</h3>
                <h3 class="info"><strong>Modificado el:</strong>&nbsp;&nbsp;{{ $post->updated_at->format('d-m-Y') }}</h3>
              
            {!! Form::close() !!}
            </div>
        </div>

        <div class="col-md-6">
        <h3>Deja tu comentario para : <strong>{{$post->title}}</strong></h3>

                <div class="panel-body">
                        {!! Form::open(['route' => 'comment.store', 'method' => 'POST']) !!}
                        {{ csrf_field() }}
                        
                        <input type="hidden" name="post_id" value="{{$post->id}}">

                            <div class="form-group">
                                {!! Form::label('username', 'Nombre de Usuario') !!}
                                {!! Form::text('username', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa su Nombre'])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('comentario', 'Comentario') !!}
                                {!! Form::text('comentario', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa su Comentario']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Enviar', ['class' => 'btn btn-info']) !!}

                            </div>
                        {!! Form::close() !!}
                </div>
        </div>
</div>


<div class="container">
    <div class="page-header">
        <h1 id="timeline">Posts (estos serian los eventos en tus denuncias)</h1>
    </div>
    @foreach ($com as $co) 
    <ul class="timeline">
        <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">{{$co->username }}</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> {{ $co->created_at }}</small></p>
            </div>
            <div class="timeline-body">
              <p>{{$co->comentario}}</p>
            </div>
          </div>
        </li>
        
        

    </ul>
      @endforeach
</div>

@stop