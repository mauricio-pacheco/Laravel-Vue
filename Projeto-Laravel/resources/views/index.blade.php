<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="@yield('descricao_pagina')" />
<meta name="author" content="@yield('titulo_pagina')" />
<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">

<title>@yield('titulo_pagina')</title>

<link rel="stylesheet" href="{{ asset('assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/font-icons/entypo/css/entypo.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/neon-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/neon-theme.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/neon-forms.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/neon-forms.css') }}">

<script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>

<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->


</head>
<body class="page-body page-fade-only">

<div class="page-container">

<div class="sidebar-menu">

<div class="sidebar-menu-inner">
			
<header class="logo-env">

<!-- Logo -->
<div class="logo">
<a href="#">
<img src="{{ asset('assets/images/logo@2x.png') }}" width="120" alt="" />
</a>
</div>

<div class="sidebar-collapse">
<a href="#" class="sidebar-collapse-icon">
<i class="entypo-menu"></i>
</a>
</div>

								
<div class="sidebar-mobile-menu visible-xs">
<a href="#" class="with-animation">
<i class="entypo-menu"></i>
</a>
</div>

</header>
			
									
<ul id="main-menu" class="main-menu">
<li class="active opened active has-sub">
<a href="#">
<i class="entypo-users"></i>
<span class="title">Usuários</span>
</a>
<ul class="visible">
<li class="active">
<a href="/usuarios">
<span class="title">Cadastrar</span>
</a>
</li>
<li>
<a href="#">
<span class="title">Gerenciar</span>
</a>
</li>
</ul>
</li>
				

</ul>
			
</div>

</div>

<div class="main-content">
				
<div class="row">
		
<div class="col-md-6 col-sm-8 clearfix">
		
<ul class="user-info pull-left pull-none-xsm">
		
<li class="profile-info dropdown">
		
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<img src="{{ asset('assets/images/thumb-1@2x.png') }}" alt="" class="img-circle" width="44" />
Maurício Pacheco
</a>
		
<ul class="dropdown-menu">
		
<li class="caret"></li>
		
<li>
<a href="#">
<i class="entypo-user"></i>
Editar Perfil
</a>
</li>

</li>
		
</ul>
</li>
		
</ul>
				
</div>
		
		
<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
<ul class="list-inline links-list pull-right">
		
<li class="sep"></li>
		
<li>
<a href="#">
Sair do Sistema <i class="entypo-logout right"></i>
</a>
</li>
</ul>
		
</div>

</div>

<hr />

<!-- CONTEÚDO DA PÁGINA -->
@yield('conteudo')

<br>

@yield('listar_usuarios')

&nbsp;

<footer class="main">

&copy; 2023 - <strong>@yield('rodape_pagina')</strong>
		
</footer>

</div>

<link rel="stylesheet" href="{{ asset('assets/js/jvectormap/jquery-jvectormap-1.2.2.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/rickshaw/rickshaw.min.css') }}">

<script src="{{ asset('assets/js/gsap/TweenMax.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/joinable.js') }}"></script>
<script src="{{ asset('assets/js/resizeable.js') }}"></script>
<script src="{{ asset('assets/js/neon-api.js') }}"></script>
<script src="{{ asset('assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>


<script src="{{ asset('assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('assets/js/rickshaw/vendor/d3.v3.js') }}"></script>
<script src="{{ asset('assets/js/rickshaw/rickshaw.min.js') }}"></script>
<script src="{{ asset('assets/js/raphael-min.js') }}"></script>
<script src="{{ asset('assets/js/morris.min.js') }}"></script>
<script src="{{ asset('assets/js/toastr.js') }}"></script>
<script src="{{ asset('assets/js/neon-chat.js') }}"></script>


<script src="{{ asset('assets/js/neon-custom.js') }}"></script>
<script src="{{ asset('assets/js/neon-demo.js') }}"></script>

</body>
</html>