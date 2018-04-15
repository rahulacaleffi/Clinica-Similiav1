<!DOCTYPE html>
<html ng-app="similiaRegs">

<head>
    @include('templates.head')
    <?
header("Access-Control-Allow-Origin: *");


//...
?>
</head>

<body>
	@include('templates.header')

	<script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
    <script src="<?= asset('js/dist/angular/angular-br-filters.min.js') ?>"></script>
    <script src="<?= asset('js/dist/angular/angular-input-masks-standalone.min.js') ?>"></script>
    <script src="<?= asset('app/app.js') ?>"></script>
    <script src="<?= asset('app/controllers/cadastrar_usuario.js') ?>"></script>
    @include('templates.navbar')
  <div class="page-wrapper">

  	
  	<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
  		<div class="row">
  	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="contact-area" ng-controller="cadastrarUsuarioController">
			<div class="section-topic-title">
				<h3>Registre-se - É grátis!</h3>
				<legend class="withoutborder">Preencha os campos abaixo</legend>
			</div>
			<form name="formUsuario" id="formUsuario" class="default-form contact-form" method="post" ng-submit="save()">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="form-group">
							<input ng-model="usuario.nome" type="text" id="nome" name="nome" placeholder="Nome">
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="form-group">
							<input ng-model="usuario.telefone" type="text" id="telefone" name="telefone" placeholder="Telefone">
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<input type="text" ng-model="usuario.endereco" id="endereco" name="endereco" placeholder="Endereço Completo" >
						</div>
						<div class="form-group">
							<input type="email" ng-model="usuario.email" id="email" name="email" placeholder="E-mail">
						</div>
						<div class="form-group">
							<input type="password" id="password" ng-model="usuario.senha" name="password" placeholder="Senha">
						</div>
						<div class="form-group">
							<input type="password" ng-model="usuario.senha_confirmation" id="password_confirmation" name="password_confirmation" placeholder="Confirmar senha">
						</div>
						<div class="form-group text-center">
							<button type="submit" class="btn-style-one">Registrar-se</button>
						</div>
					</div>
				</div>
			</form>
		</div>                        
	</div>
	</div>
	</div>
  </div>
</body>

@include('templates.footer')

@include('templates.scripts')

</html>