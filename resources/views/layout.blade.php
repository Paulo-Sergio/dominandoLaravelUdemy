<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Site Laravel</title>
        <style>
            .active{
                text-decoration: none;
                color: green;
            }
        </style>
    </head>
    <body>
        <?php

        function activeMenu($url) {
            return request()->is($url) ? 'active' : '';
        }
        ?>
        <header>
            <h1>{{request()->url()}}</h1>
            <nav>
                <a href="{{ route('home') }}" class="{{ activeMenu('/') }}">Home</a>
                <a href="{{ route('saudacao', 'Paulo') }}" class="{{ activeMenu('saudacao/*') }}">Saudação</a>
                <a href="{{ route('mensagens.create') }}" class="{{ activeMenu('mensagens/create') }}">Contato</a>
		@if (auth()->check())
		    <a href="{{ route('mensagens.index') }}" class="{{ activeMenu('mensagens') }}">Mensagens</a>
		    <a href="/logout">Logout {{ auth()->user()->email }}</a>
		@endif
		@if (auth()->guest())
		    <a href="/login" class="{{ activeMenu('login') }}">Login</a>
		@endif
            </nav>
        </header>

        @yield('conteudo')

        <footer>Copyright ® {{date('Y')}}</footer>
    </body>
</html>



