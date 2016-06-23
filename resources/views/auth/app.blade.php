<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	{!! Html::style('bootstrap/css/bootstrap.css') !!}
 
  

  <style type="text/css">



  </style>
</head>
<body>

<nav class="navbar navbar-default">
        <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Laravel</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
                <li><a href="{{route('auth/login')}}">Login</a></li>
            <li><a href="{{route('auth/register')}}">Register</a></li>
            @else
                    <li>
                        <a href="#">{{ Auth::user()->name }}</a>
                    </li>
                    <li><a href="{{route('auth/logout')}}">Logout</a></li>
                    
              @endif
        </ul>
      </div>
    </div>
  </nav>
    <div class="container">
               @if (Session::has('errors'))
        <div class="alert alert-warning" role="alert">
      <ul>
              <strong>Oops! Something went wrong : </strong>
          @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>
    @yield('content')
    <!-- Scripts -->
   






	
	{!! Html::script('bootstrap/js/jquery.min.js') !!}

	{!! Html::script('bootstrap/js/bootstrap.min.js') !!}

  

	
</body>
</html>