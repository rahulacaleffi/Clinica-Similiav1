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
                    <div class="col-md-12">

                      <h6 class="tagline">Seja um colaborador e aproveite diversos benefícios!</h6>

                      <p>Quem tiver interesse em participar de todas as atividades do Grupo de Estudos convidamos a tornar-se um colaborador.</p>

                      <p>Para isso é mister ser médico ou dentista.</p>

                      <p>Ser um colaborador inclui diversas vantagens, dentre elas:</p>

                      <ul class="content-list">
                          <li>
                              <i class="fa fa-check-square-o"></i>Cadeira reservada em Ambulatórios, WWR e casos do Dr. Sankaran.
                          </li>
                          <li>
                              <i class="fa fa-check-square-o"></i>Prioridade na indicação de pacientes para o Ambulatório.
                          </li>
                          <li>
                              <i class="fa fa-check-square-o"></i>Acompanhamento de pacientes particulares.
                          </li>
                          <li>
                              <i class="fa fa-check-square-o"></i>50% de desconto em cursos específicos.
                          </li>
                          <li>
                              <i class="fa fa-check-square-o"></i>Material exclusivo.
                          </li>
                        </ul>

                      <br>

                      <h6 class="tagline">A Escola conta com a sua contibuição para oferecer os melhores cursos</h6>

                      <p>São inevitáveis os custos de manutenção referentes à Escola:</p>
                      <ul class="content-list">
                        <li>
                            <i class="fa fa-dot-circle-o"></i>Aluguel do local.
                        </li>
                        <li>
                            <i class="fa fa-dot-circle-o"></i>Pagamento dos casos.
                        </li>
                        <li>
                            <i class="fa fa-dot-circle-o"></i>Pagamentos de Royalties à the other song.
                        </li>
                        <li>
                            <i class="fa fa-dot-circle-o"></i>Pagamentos dos casos clínicos do Dr. Sankaran.
                        </li>
                        <li>
                            <i class="fa fa-dot-circle-o"></i>Pagamento dos instrutores/facilitadores.
                        </li>
                      </ul>

                      <p>Por isso, contamos com a colaboração dos colegas que utilizarão essa estrutura no sentido de ajudar com esses custos e possibilitar novos investimentos.</p>
                      
                      <p>Convidamos as pessoas que têm interesse em participar do Grupo Permanente de Estudos a se tornarem colaboradores.</p>

                      <br>

                      <p>
                        <div class="link-btn">
                            <a href="colaborador/cadastro" class="btn-style-one btn-bigger">Faça a sua adesão</a>
                        </div>
                      </p>
                       
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