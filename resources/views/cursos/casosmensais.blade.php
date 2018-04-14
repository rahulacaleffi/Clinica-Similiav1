<!DOCTYPE html>
<html>

<head>
    @include('templates.head')
</head>

<body>
  <div class="page-wrapper">

    @include('templates.header')

    @include('templates.navbar')

    <section class="story">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-1">
                    <div class="story-content">
                        <div class="section-topic-title">
                          <h3>Casos Mensais com Dr. Sankaran</h3>
                        </div>

                        <h3 class="tagline">O Curso</h3>

                        <p>Todos os meses teremos um caso ao vivo com pacientes brasileiros e tradução simultânea, atendido pelo Dr. Rajan Sankaran de Mumbai-India.</p>

                        <br>

                        <h3 class="tagline">Horário</h3>

                        <ul class="content-list">
                          <li>
                              <i class="fa fa-clock-o"></i>
                              <span class="topic">Sábados:</span> das 9hrs às 13hs.
                          </li>
                        </ul>

                        <br>

                        <h3 class="tagline">Próximo evento: 07 de abril - 9hrs</h3>

                        <br>

                        <h3 class="tagline">Valor: R$ 250,00 (Entrada franca para colaboradores)</h3>

                        <!-- <p>
                          <div class="link-btn">
                              <a href="/colaborador/incricao.html" class="btn-style-one btn-bigger">Seja um colaborador</a>
                          </div>
                        </p> -->

                        <br>

                        <h3 class="tagline" style="text-decoration: underline;">Nossos cursos são exclusivos para médicos ou dentistas</h3>

                        <br>

                        <p>
                          Clique no botão abaixo para confirmar sua presença na próxima data, colocando suas informações na última linha da tabela.
                        </p>

                        <p>
                          <div class="link-btn">
                              <a href="https://docs.google.com/spreadsheets/d/1jVZoi4EOf75eObGrUUFZ8O7s0TFK8iqxLybb219RP_E/edit?usp=sharing" target="_blank" class="btn-style-one btn-bigger">Faça a sua incrição</a>
                          </div>
                        </p>
                        <br><br>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                  <h2 class="black"></h2>
                    <img src="../images/cursos/dr-rajan-sankaran.jpg" class="responsive" alt="Clinica Similia Curitiba - HomeopatiaClínica Similia"><br><br>
                </div>
            </div>
        </div>
    </section>

  </div>
</body>

@include('templates.footer')

@include('templates.scripts')

</html>