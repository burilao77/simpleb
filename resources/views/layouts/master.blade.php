<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Blog By Dany</title>


  {!!Html::style('css/bootstrap.min.css')!!}
   {!!Html::style('css/font-awesome.min.css')!!}


</head>
<body>
 <!-- Fixed navbar -->
        <nav class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <a class="navbar-brand" href="{{ url('/') }}">Inicio</a>
            <a class="navbar-brand" href="{{route('post.create')}}">Crear Post</a>
            <a class="navbar-brand" href="{{route('post.index')}}">Lista de Posts</a>
          
            </div>
            <!-- <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a class="navbar-brand" href="#">Home</a></li>

              </ul>
            </div><!--/.nav-collapse --> 
            
          </div>
        </nav>

    

<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>


</body>
    {!!Html::script('/js/jquery.min.js')!!}
    {!!Html::script('/js/bootstrap.min.js')!!}
</html>
