<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>Site Laravel</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>
    <?php

    function activeMenu($url) {
	return request()->is($url) ? 'active' : '';
    }
    ?>
    <header>
      <!--<h1>{{request()->url()}}</h1>-->

      <nav class="navbar navbar-default">
	<div class="container">
	  <!-- Brand and toggle get grouped for better mobile display -->
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="{{ route('home') }}">Sistema Laravel</a>
	  </div>

	  <!-- Collect the nav links, forms, and other content for toggling -->
	  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <ul class="nav navbar-nav">
	      <li class="{{ activeMenu('/') }}">
		<a href="{{ route('home') }}">Home</a>
	      </li>
	      <li class="{{ activeMenu('saudacao/*') }}">
		<a href="{{ route('saudacao', 'Paulo') }}">Saudação</a>
	      </li>
	      <li class="{{ activeMenu('mensagens/create') }}">
		<a href="{{ route('mensagens.create') }}">Contato</a>
	      </li>
	      @if (auth()->check())
		<li class="{{ activeMenu('mensagens') }}">
		  <a href="{{ route('mensagens.index') }}">Mensagens</a>
		</li>
		@if (auth()->user()->hasRoles('admin'))
		    <li class="{{ activeMenu('usuarios*') }}">
		      <a href="{{ route('usuarios.index') }}">Usuários</a>
		    </li>
		@endif
	      @endif
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	      @if (auth()->guest())
		<li class="{{ activeMenu('login') }}">
		  <a href="/login">Login</a>
		</li>
	      @else
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->email }} <span class="caret"></span></a>
		  <ul class="dropdown-menu">
		    <li><a href="/logout">Encerrar Sessão</a></li>
		  </ul>
		</li>
	      @endif
	    </ul>
	  </div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
      </nav>

    </header>

    <div class="container">
      @yield('conteudo')

      <hr>
      <footer>Copyright ® {{date('Y')}}</footer>
    </div>

    <script src="/js/all.js"></script>
  </body>
</html>



