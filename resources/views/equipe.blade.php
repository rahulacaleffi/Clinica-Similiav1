<!DOCTYPE html>
<html>

<head>
    @include('templates.head')
</head>

<body>
  <div class="page-wrapper">

    @include('templates.header')

    @include('templates.navbar')

    <section class="page-title text-center parallax" style="background-image:url(<?= asset('images/clinica/sala4.jpg') ?>);">
        <div class="container">
            <div class="title-text">
                <h1>Nossa equipe</h1>
            </div>
        </div>
    </section>


    <section class="service-tab-section section">
        <div class="outer-box clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      <div class="section-title contents text-center" style="margin-top: -50px;">
                        <span class="spanlinha" style="min-width: 600px;background: transparent;padding: 0px 0px 70px 120px;border-bottom: 2px solid gray;"></span>
                        <h3>
                          <span>Conheça a nossa</span> Equipe
                        </h3>

                        <br>

                        <h6 class="tagline"><i>“A maior missão do ser humano é ajudar o próximo. Esta é nossa missão como profissionais: Dedicação para promover a cura e saúde conectando o indivíduo ao coletivo em equilíbrio e harmonia.”</i></h6>

                        <br><br>

                      </div>

                        <div class="tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation">
                                    <a href="#carlos" class="scrollSuave">Dr. Carlos Eduardo Leitão</a>
                                </li>
                                <li role="presentation">
                                    <a href="#diogo" class="scrollSuave">Dr. Diogo Olive Gomes</a>
                                </li>
                                <li role="presentation">
                                    <a href="#christiane" class="scrollSuave">Christiane Fernanda dos Santos</a>
                                </li>
                            </ul>
                        </div>

                        <div class="row">
                            <div class="service-box tab-pane fade in col-md-12" id="carlos" style="padding: 10px;" align="center">
                                <div class="col-md-6">
                                    <img class="img-responsive" src="<?= asset('images/team/carlos.jpg') ?>">
                                </div>
                                <div class="col-md-6">
                                    <div class="contents" align="left">
                                        <div class="section-title center">
                                          <h3>Dr. Carlos Eduardo Leitão</h3>
                                        </div>
                                        <div class="text">
                                            <ul class="content-list">
                                                <li>CRM 14.815/Pr</li>
                                                <li>Médico formado pela UFPR em 1994</li>
                                                <li>Homeopata pela Fundação de Estudos Homeopáticos do Paraná</li>
                                                <li>Título de especialista em Homeopatia desde 1997</li>
                                                <li>Professor e Representante autorizado no Brasil da “the other song Academy” - Mumbai</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        
                        <div class="row">
                            <div class="service-box tab-pane fade in col-md-12" id="diogo" style="padding: 10px;" align="center">
                                <div class="col-md-6">
                                    <img class="img-responsive" src="<?= asset('images/team/diogo.jpg') ?>">
                                </div>
                                <div class="col-md-6">
                                    <div class="contents" align="left">
                                        <div class="section-title center">
                                            <h3>Dr. Diogo Olive Gomes</h3>
                                        </div>
                                        <div class="text">
                                            <ul class="content-list">
                                                <li>CRM 34.257/Pr</li>
                                                <li>Graduação pela Faculdade de Ciências Médicas da Santa Casa de São Paulo</li>
                                                <li>Residência Médica em Medicina da Família e Comunidade pela Universidade de São Paulo</li>
                                                <li>Especializção em Homeopatia pela Faculdade de Ciências da Saúde - FACIS</li>
                                                <li>Segundo Secretário da Associação Médica Homeopática do Paraná</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="service-box tab-pane fade in col-md-12" id="christiane" style="padding: 10px;" align="center">
                                <div class="col-md-6">
                                    <img class="img-responsive" src="<?= asset('images/team/chris.jpeg') ?>">
                                </div>
                                <div class="col-md-6">
                                    <div class="contents" align="left">
                                        <div class="section-title center">
                                            <h3>Christiane Fernanda dos Santos</h3>
                                        </div>
                                        <div class="text">
                                            <ul class="content-list">
                                                <li>Administração e organiazação do Seminário Internacional de Homeopatia com Dr. Sankaran 2017</li>
                                                <li>Divulgação e contato MacRepertory e ReferenceWorks - Synergy - Brazil</li>
                                                <li>Consultora dos cursos the other song - Brasil</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  </div>
</body>

@include('templates.footer')

@include('templates.scripts')

</html>