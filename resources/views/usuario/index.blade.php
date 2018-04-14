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
  <div class="page-wrapper">

    @include('templates.header')

    @include('templates.navbar')

    

    <section class="service-tab-section section">
      <div class="row" align="center">
        <form name="login_form" class="default-form contact-form" action="/usuario/index" method="GET">
        
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <input type="text" name="email" placeholder="Email" required="">
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <input type="password" name="senha" placeholder="Senha" required="">
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group text-center">
              <input type="submit" name="logar" class="btn-style-one" value="Entrar">
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group text-center">
              <button type="submit" name="logar" class="btn-style-one" onclick="location.href = '/usuario/registrar';">Registrar-se</button>
            </div>
          </div>
      </form>
      </div>
    </section>

    @include('usuario.logar')

  </div>
</body>

@include('templates.footer')

@include('templates.scripts')

</html>