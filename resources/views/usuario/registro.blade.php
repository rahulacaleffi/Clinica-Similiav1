<!DOCTYPE html>
<html>

<head>
    @include('templates.head')
    <?
header("Access-Control-Allow-Origin: *");


//...
?>
</head>

<body>
	@include('templates.header')

    @include('templates.navbar')
  <div class="page-wrapper">

  	
  	<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
  		<div class="row">
  	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="contact-area">
			<div class="section-topic-title">
				<h3>Registre-se - É grátis!</h3>
				<legend class="withoutborder">Preencha os campos abaixo</legend>
				
			</div>
			<form name="contact_form" class="default-form contact-form" method="post">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="form-group">
							<input ng-model="usuario." type="text" name="nome" placeholder="Nome">
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="form-group">
							<input type="text" name="tel" placeholder="Telefone">
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<input type="text" name="endereco" placeholder="Endereço Completo" >
						</div>
						<div class="form-group">
							<input type="email" name="email" placeholder="E-mail">
						</div>
						<div class="form-group">
							<input type="password" name="senha" placeholder="Senha">
						</div>
						<div class="form-group">
							<input type="password" name="senha" placeholder="Confirmar senha">
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