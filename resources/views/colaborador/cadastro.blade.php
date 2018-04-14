<!DOCTYPE html>
<html ng-app="similiaRegs">

<head>
    @include('templates.head')
</head>

<body>
  <div class="page-wrapper">

    <!-- AngularJS Application Scripts -->
    <script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
    <script src="<?= asset('js/dist/angular/angular-br-filters.min.js') ?>"></script>
    <script src="<?= asset('js/dist/angular/angular-input-masks-standalone.min.js') ?>"></script>
    <script src="<?= asset('app/app.js') ?>"></script>
            
    <!-- Controller AngularJS -->
    <script src="<?= asset('app/controllers/cadastrar_colaborador.js') ?>"></script>

    @include('templates.header')

    @include('templates.navbar')

    <section class="page-title text-center parallax" style="background-image:url(<?= asset('images/clinica/mesa.jpg') ?>);">
        <div class="container">
            <div class="title-text">
                <h1>Colaborador</h1>
            </div>
        </div>
    </section>

    <section class="service-tab-section section">
        <div class="outer-box clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" ng-controller="cadastrarColaboradorController">
                      <div class="section-topic-title">
                        <h3>Formulário de inscrição</h3>
                      </div>

                      <form name="formColaborador" id="formColaborador" novalidate autocomplete="off" ng-submit="save()">
                        <div class="form-section">
                            <div class="content-group">
                                <label for="nome" class="control-label">Nome completo:</label>
                                <input type="text" class="form-control" id="nome" name="nome" ng-model="colaborador.nome" autofocus>
                            </div>

                            <br>

                            <div class="content-group">
                                <label for="telefone" class="control-label">Telefone:</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" ng-model="colaborador.telefone" ui-br-phone-number-mask>
                            </div>

                            <br>

                            <div class="content-group">
                                <label for="email" class="control-label">E-mail:</label>
                                <input type="text" class="form-control" id="email" name="email" ng-model="colaborador.email">
                            </div>

                            <br>

                            <div class="content-group">
                                <label for="endereco" class="control-label">Endereço:</label>
                                <input type="text" class="form-control" id="endereco" name="endereco" ng-model="colaborador.endereco">
                            </div>

                            <br>

                            <div>Conselho Regional:</div>
                            
                            <div class="content-group options-group">
                                <label><input type="radio" id="crx_tipo_crm" name="crx_tipo" ng-model="colaborador.crx_tipo" value="CRM">Medicina (CRM)</label><br>

                                <label><input type="radio" id="crx_tipo_cro" name="crx_tipo" ng-model="colaborador.crx_tipo" value="CRO">Ortodontia (CRO)</label><br>
                            </div>
                            

                            <div class="content-group">
                                <label for="crx_numero" class="control-label">Número:</label>
                                <input type="text" class="form-control" id="crx_numero" name="crx_numero" ng-model="colaborador.crx_numero">
                            </div>

                            <br>

                            <div>Atividades inclusas no pacote que deseja participar:</div>

                            <div class="content-group options-group">
                                <label><input type="checkbox" id="ambulatorio" name="ambulatorio" ng-model="colaborador.ambulatorio" value="">Ambulatório (terças-feiras)</label><br>

                                <label><input type="checkbox" id="wwr" name="wwr" ng-model="colaborador.wwr">Wednesdays with Rajan (quartas-feiras)</label><br>

                                
                                <label><input type="checkbox" id="casosmensais" name="casosmensais" ng-model="colaborador.casosmensais">Casos mensais com Dr. Sankaran (2º sábado de cada mês)</label><br>
                            </div>

                            <br>

                            <div>Atividades não inclusas (colaboradores terão 50% de desconto):</div>

                            <div class="content-group options-group">
                                <label><input type="checkbox" id="metododasensacao" name="metododasensacao" ng-model="colaborador.metododasensacao">Curso do Método da Sensação</label><br>

                                <label><input type="checkbox" id="macreprw" name="macreprw" ng-model="colaborador.macreprw">Curso MacRepertory e ReferenceWorks</label><br>
                            </div>

                            <br>

                            <div>Contribuição:</div>

                            <div class="content-group">
                                <div class="options-group">
                                    <label><input type="radio" id="contribuicao" name="contribuicao" ng-model="colaborador.contribuicao" value="350">R$ 350,00 mensais</label><br>

                                    <label><input type="radio" id="contribuicaoMaior" name="contribuicao" ng-model="colaborador.contribuicao" value="">Maior que R$ 350,00 mensais</label><br>
                                </div>
                                

                                <div id="contribuicao-content" style="display: none;">
                                    <label for="valor" class="control-label">Especifique:</label>
                                    <input type="text" class="form-control" id="valor" name="valor" ng-model="colaborador.contribuicao" ui-money-mask><br>
                                </div>
                            </div>

                            
                            
                            

                            <br><br>
                          </div>
                        </div>
                        <div class="text-center">
                          <button class="btn-style-one btn-bigger" type="submit">Enviar formulário</button>
                        </div>
                        
                      </form>

                      <br>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>  

  </div>
</body>

@include('templates.footer')

@include('templates.scripts')

<script type="text/javascript">
  $(function(){
    $('input:radio').change(function() {
        var slider = $("#contribuicao-content");

        if($(this).attr("id") == "contribuicaoMaior"){
            $(slider).show(500);
        } else {
            $(slider).hide(500);
        }
    });

    $(".has-error").focus(function(){
        $(this).removeClass("has-error");
        $(this).children().remove(".alert");
    });
  });
</script>

</html>