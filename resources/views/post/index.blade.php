@extends('layouts/master')

	@section('content')
    @if(Session::has('message'))
<div class=" alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	{{Session::get('message')}}
</div>
@endif
<div class="row">
	<div class="col-md-12">
		<h1>Lista de Posts</h1>
	</div>
</div>
		<div class="row">
					<table class="table table-striped">
					<tr>
						<th>Codigo</th>
						<th>Titulo</th>
						<th>Descripcion</th>
					
                        <th>Acciones</th>
					</tr>
					@foreach($posts as $post)
						<tr>
							<td>{{ $post->id }}</td>
							<td>{{ $post->title }}</td>
							<td>{{ $post->description }}</td>
					
                            <td>
								<a href="{{route('post.show', $post->id)}}" class="btn btn-info">Detalle</a>								
							
							</td>
							
						</tr>
					@endforeach
					</table>
		</div>

@stop