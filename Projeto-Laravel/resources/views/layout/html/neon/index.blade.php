<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Maurício Pacheco - Primeiro Projeto Laravel" />
	<meta name="author" content="" />

	<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">

	<title>Maurício Pacheco - Primeiro Projeto Laravel</title>

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
<body class="page-body  page-fade">

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
						<i class="entypo-gauge"></i>
						<span class="title">Dashboard</span>
					</a>
					<ul class="visible">
						<li class="active">
							<a href="#">
								<span class="title">Dashboard 1</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="title">Dashboard 2</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="title">Dashboard 3</span>
							</a>
						</li>
						<li class="has-sub">
							<a href="#">
								<span class="title">Skins</span>
							</a>
							<ul>
								<li>
									<a href="#">
										<span class="title">Black Skin</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="title">White Skin</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="title">Purple Skin</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="title">Cafe Skin</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="title">Red Skin</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="title">Green Skin</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="title">Yellow Skin</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="title">Blue Skin</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="title">Facebook Skin</span>
										<span class="badge badge-secondary badge-roundless">Novo</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
								<span class="title">Novo Projeto</span>
								<span class="badge badge-success badge-roundless">v2.0</span>
							</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="#">
						<i class="entypo-chart-bar"></i>
						<span class="title">Menu Fixo</span>
					</a>
				</li>
				<li class="has-sub">
					<a href="#">
						<i class="entypo-flow-tree"></i>
						<span class="title">Menu Levels</span>
					</a>
					<ul>
						<li>
							<a href="#">
								<i class="entypo-flow-line"></i>
								<span class="title">Menu Level 1.1</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="entypo-flow-line"></i>
								<span class="title">Menu Level 1.2</span>
							</a>
						</li>
						<li class="has-sub">
							<a href="#">
								<i class="entypo-flow-line"></i>
								<span class="title">Menu Level 1.3</span>
							</a>
							<ul>
								<li>
									<a href="#">
										<i class="entypo-flow-parallel"></i>
										<span class="title">Menu Level 2.1</span>
									</a>
								</li>
								<li class="has-sub">
									<a href="#">
										<i class="entypo-flow-parallel"></i>
										<span class="title">Menu Level 2.2</span>
									</a>
									<ul>
										<li class="has-sub">
											<a href="#">
												<i class="entypo-flow-cascade"></i>
												<span class="title">Menu Level 3.1</span>
											</a>
											<ul>
												<li>
													<a href="#">
														<i class="entypo-flow-branch"></i>
														<span class="title">Menu Level 4.1</span>
													</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">
												<i class="entypo-flow-cascade"></i>
												<span class="title">Menu Level 3.2</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">
										<i class="entypo-flow-parallel"></i>
										<span class="title">Menu Level 2.3</span>
									</a>
								</li>
							</ul>
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
		
							<li>
								<a href="#">
									<i class="entypo-mail"></i>
									Caixa Entrada
								</a>
							</li>
		
							<li>
								<a href="#">
									<i class="entypo-calendar"></i>
									Calendário
								</a>
							</li>
		
						</ul>
					</li>
		
				</ul>
				
				<ul class="user-info pull-left pull-right-xs pull-none-xsm">
		
					<li class="notifications dropdown">
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="entypo-attention"></i>
							<span class="badge badge-info">6</span>
						</a>
		
						<ul class="dropdown-menu">
							<li class="top">
								<p class="small">
									<a href="#" class="pull-right">Marcar Todas como Lidas</a>
									Você tem <strong>3</strong> novas notificações.
								</p>
							</li>
							
							<li>
								<ul class="dropdown-menu-list scroller">
									<li class="unread notification-success">
										<a href="#">
											<i class="entypo-user-add pull-right"></i>
											
											<span class="line">
												<strong>Novo Usuário Cadastrado</strong>
											</span>
											
											<span class="line small">
												30 segundos atrás
											</span>
										</a>
									</li>
									
									
									<li class="notification-danger">
										<a href="#">
											<i class="entypo-cancel-circled pull-right"></i>
											
											<span class="line">
												John Cancelou o Evento
											</span>
											
											<span class="line small">
												9 horas atrás
											</span>
										</a>
									</li>
									
									<li class="notification-info">
										<a href="#">
											<i class="entypo-info pull-right"></i>
											
											<span class="line">
												O servidor está com status OK
											</span>
											
											<span class="line small">
												ontem às 10:30 hs
											</span>
										</a>
									</li>
									
									<li class="notification-warning">
										<a href="#">
											<i class="entypo-rss pull-right"></i>
											
											<span class="line">
												Novos comentários para aprovar
											</span>
											
											<span class="line small">
												última semana
											</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="external">
								<a href="#">Visualizar todas as notificações</a>
							</li>
						</ul>
		
					</li>
		
					<li class="notifications dropdown">
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="entypo-mail"></i>
							<span class="badge badge-secondary">10</span>
						</a>
		
						<ul class="dropdown-menu">
							<li>
								<form class="top-dropdown-search">
									
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Pesquisar..." name="s" />
									</div>
									
								</form>
								
								<ul class="dropdown-menu-list scroller">
									<li class="active">
										<a href="#">
											<span class="image pull-right">
												<img src="{{ asset('assets/images/thumb-1@2x.png') }}" width="44" alt="" class="img-circle" />
											</span>
											
											<span class="line">
												<strong>Josias da Silva</strong>
												- ontem
											</span>
											
											<span class="line desc small">
												Este não é o nosso primeiro item.
											</span>
										</a>
									</li>
									
									<li class="active">
										<a href="#">
											<span class="image pull-right">
												<img src="{{ asset('assets/images/thumb-2@2x.png') }}" width="44" alt="" class="img-circle" />
											</span>
											
											<span class="line">
												<strong>Selma Nyberg</strong>
												- 2 dias atrás
											</span>
											
											<span class="line desc small">
												Ele impressiona decisivamente a amizade. 
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="image pull-right">
												<img src="{{ asset('assets/images/thumb-3@2x.png') }}" width="44" alt="" class="img-circle" />
											</span>
											
											<span class="line">
												<strong>Hayden Cartwright</strong>
												- a uma semana atrás
											</span>
											
											<span class="line desc small">
												Muito divertido.
											</span>
										</a>
									</li>
								
								</ul>
							</li>
							
							<li class="external">
								<a href="#">Todas as Mensagens</a>
							</li>
						</ul>
		
					</li>
		
					<li class="notifications dropdown">
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="entypo-list"></i>
							<span class="badge badge-warning">1</span>
						</a>
		
						<ul class="dropdown-menu">
							<li class="top">
								<p>Você tem 6 tarefas pendentes</p>
							</li>
							
							<li>
								<ul class="dropdown-menu-list scroller">
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Compras</span>
												<span class="percent">27%</span>
											</span>
										
											<span class="progress">
												<span style="width: 27%;" class="progress-bar progress-bar-success">
													<span class="sr-only">27% Completado</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Desenvolvimento de aplicativos</span>
												<span class="percent">83%</span>
											</span>
											
											<span class="progress progress-striped">
												<span style="width: 83%;" class="progress-bar progress-bar-danger">
													<span class="sr-only">83% Completado</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">HTML</span>
												<span class="percent">91%</span>
											</span>
											
											<span class="progress">
												<span style="width: 91%;" class="progress-bar progress-bar-success">
													<span class="sr-only">91% Completado</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Reparo do banco de dados</span>
												<span class="percent">12%</span>
											</span>
											
											<span class="progress progress-striped">
												<span style="width: 12%;" class="progress-bar progress-bar-warning">
													<span class="sr-only">12% Completado</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Backup</span>
												<span class="percent">54%</span>
											</span>
											
											<span class="progress progress-striped">
												<span style="width: 54%;" class="progress-bar progress-bar-info">
													<span class="sr-only">54% Completado</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Upgrade</span>
												<span class="percent">17%</span>
											</span>
											
											<span class="progress progress-striped">
												<span style="width: 17%;" class="progress-bar progress-bar-important">
													<span class="sr-only">17% Completado</span>
												</span>
											</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="external">
								<a href="#">Visualizar todas as Tarefas</a>
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
		
		
		
	
		
		<footer class="main">
			
			&copy; 2023 <strong>Maurício Pacheco</strong>
		
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