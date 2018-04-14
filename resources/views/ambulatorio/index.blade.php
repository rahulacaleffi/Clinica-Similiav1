<!DOCTYPE html>
<html>

<head>
    @include('templates.head')
</head>

<body>
  <div class="page-wrapper">

    @include('templates.header')

    @include('templates.navbar')

    <section class="page-title text-center parallax" style="background-image:url(<?= asset('images/background/ambulatorio.jpeg') ?>);">
        <div class="container">
            <div class="title-text">
                <h1>Ambulatório</h1>
            </div>
        </div>
    </section>

    <section class="service-tab-section section">
        <div class="outer-box clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                      <h6 class="tagline">Participe do ambulatório da clínica Simília</h6>

                      <p>A SIMILIA cumpre seu papel social promovendo o atendimento de pacientes com dificuldades econômicas, possibilitando que médicos homeopatas possam participar da tomada do caso.</p> 
                      <p>Em seguida é feita a análise sob a luz do Método da Sinergia, onde a experiência e observações de todos são levadas em consideração e o remédio mais similar ao paciente é prescrito.</p>
                      <p>Tudo isso é realizado em um ambiente amigável, onde a consulta ocorre em um consultório particular e é transmitida para uma sala de aula com estrutura audio-visual e capacidade para 22 médicos. Segue assim o modelo criado pela the other song academy de Mumbai, oferecendo um experiência que integra atendimento, aprendizado, privacidade e conforto a todos. </p>

                      <br>

                      <h6 class="tagline">Indique o seu paciente para ser apresentado no ambulatório</h6>

                      <p>Para que seu paciente possa participar do ambulatório, é preciso preencher um formulário de inscrição. Nele você encontrará um questionário que deverá ser respondido pelo paciente e entregue pessoalmente ou escaneado e enviado por e-mail para a escola.</p>

                      <br>

                      <p>
                        Clique no botão abaixo para baixar o formulário do paciente, que deverá ser preenchido por ele e entregue em material físico ou scaneado e enviado por e-mail para um dos funcionário da clínica.
                        <div class="link-btn">
                            <a href="<?= asset('files/Case_Record_Form.pdf') ?>" target="_blank" class="btn-style-one btn-bigger">Baixe o formulário</a>
                        </div>
                      </p>

                      <br>

                      <p>
                          Clique no botão abaixo para confirmar sua presença na próxima data, colocando suas informações na última linha da tabela.
                        </p>

                      <p>
                        <div class="link-btn">
                            <a href="https://docs.google.com/spreadsheets/d/1y5pHbYjc5pbyC-K28hcSS4U1BUCsuz5wCHvcPyJJGqw/edit?usp=sharing" target="_blank" class="btn-style-one btn-bigger">Faça a sua incrição</a>
                        </div>
                      </p>

                      <br><br>
                       
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