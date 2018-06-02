<!DOCTYPE html>
<html>

<head>
    @include('templates.head')

    <style type="text/css">
        .story span {
            font-size: 18px !important;
        }
        .fa-usd {
            color: white;
            font-size: 15px !important;
            margin-left: 4px;
            margin-top: -1px;
        }
        .fa-circle {
            font-size: 20px !important;
        }
    </style>

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
                          <h3>Viagem à Índia</h3>
                        </div>

                        <p>Estamos organizando uma expedição para a Índia, em fevereiro de 2019, com o objetivo de estudo na the other song Academy, com o Dr. Rajan Sankaran e outros seletos instrutores, além de conhecer a cultura e a beleza do país. Ela está dividida em quatro grupos, de 2 ou 3 semanas, com ou sem tour, porém todas encerrando na mesma data. Será uma experiência singular de muito aprendizado e valiosa para todos os profissionais que exercem a Homeopatia.</p>

                        <p>Por um acrécimo do valor, você terá direito a um tour pelo Triângulo Dourado - Nova Delhi, Jaipur e Agra - e conhecer os pontos turisticos mais procurados da Índia. Assim, sua partida ocorrerá mais cedo, mas o retorno está sincronizado com o dos outros grupos</p>

                        <p>Confira abaixo as datas, valores e conteúdos de cada uma das opções oferecidas.<P>

                        <br>

                        <h3 class="tagline">Viagem de 2 semanas</h3>

                        <p><span><b>Data:</b> 25 de fevereiro a 10 de março</span></p>
                        <p><span><b>Valores:</b></span>
                        <ul class="content-list">
                            <li>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-1x"></i>
                                    <i class="fa fa-usd fa-stack-1x"></i>
                                </span>
                                <span class="topic">Apartamento duplo: </span><span>USD 2.880/pessoa.</span>
                            </li>
                            <li>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-1x"></i>
                                    <i class="fa fa-usd fa-stack-1x"></i>
                                </span>
                                <span class="topic">Apartamento single: </span><span>USD 3.824/pessoa.</span>
                            </li>
                        </ul>
                        </p>

                        <br>

                        <h3 class="tagline">Viagem de 2 semanas + Tour</h3>

                        <p><span><b>Data:</b> 16 de fevereiro a 10 de março de 2019</span>
                        <p><span><b>Valores:</b></span>
                          <ul class="content-list">
                            <li>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-1x"></i>
                                    <i class="fa fa-usd fa-stack-1x"></i>
                                </span>
                                <span class="topic">Apartamento duplo: </span><span>USD 4.390/pessoa.</span>
                            </li>
                            <li>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-1x"></i>
                                    <i class="fa fa-usd fa-stack-1x"></i>
                                </span>
                                <span class="topic">Apartamento single: </span><span>USD 4.528/pessoa.</span>
                            </li>
                          </ul>
                        </p>

                        <br>

                        <h3 class="tagline">Viagem de 3 semanas</h3>

                        <p><span><b>Data:</b> 18 de fevereiro a 10 de março</span></p>
                        <p><span><b>Valores:</b></span>
                        <ul class="content-list">
                            <li>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-1x"></i>
                                    <i <i class="fa fa-usd fa-stack-1x"></i>
                                </span>
                                <span class="topic">Apartamento duplo: </span><span><span>USD 3.238/pessoa.</span>
                            </li>
                            <li>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-1x"></i>
                                    <i class="fa fa-usd fa-stack-1x"></i>
                                </span>
                                <span class="topic">Apartamento single: </span><span>USD 4.572/pessoa.</span>
                            </li>
                        </ul>
                        </p>

                        <br>

                        <h3 class="tagline">Viagem de 3 semanas + Tour</h3>

                        <p><span><b>Data:</b> 10 de fevereiro a 10 de março</span></p>
                        <p><span><b>Valores:</b></span>
                        <ul class="content-list">
                            <li>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-1x"></i>
                                    <i class="fa fa-usd fa-stack-1x"></i>
                                </span>
                                <span class="topic">Apartamento duplo: </span><span>USD 4.590/pessoa.</span>
                            </li>
                            <li>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-1x"></i>
                                    <i class="fa fa-usd fa-stack-1x"></i>
                                </span>
                                <span class="topic">Apartamento single: </span><span>USD 4.715/pessoa.</span>
                            </li>
                        </ul>
                        </p>

                        <br>

                        <h3 class="tagline">Programação</h3>

                        <p><span><b>1ª e 2ª semana:</b></span>
                        <ul class="content-list">
                            <li>
                                <i class="fa fa-calendar"></i>
                                Todas as manhãs, exceto em quartas-feiras, com o Dr. Sankaran - caso ao vivo.
                            </li>
                            <li>
                                <i class="fa fa-calendar"></i>
                                Tardes com Dr. Dinesh (pediatria), Dr. Gandhi (psiquiatria), Dr. Sujitt (câncer), Dr. Danipkar (agudos), Dr. Manish (casos difíceis e estratégias de Sarkar) e Dr. Paresh (estratégias de tomada de caso).
                            </li>
                            <li>
                                <i class="fa fa-calendar"></i>
                                Quartas-feiras com Dr. Jayesh (método meditativo de exploração da sensação vital).
                            </li>
                        </ul>
                            O Dr. Dinesh tem uma vasta experiência pediátrica e é o criador do Método da Testemunha dentro das estratégias da Sinergia.<br>
                            O Dr. Gandhi é psiquiatra, escritor e tem um vasto estudo no Método da Sinergia.<br>
                            O Dr. Sujitt é um dos médicos com a mais vasta experiência em tratamento homeopático do câncer.<br>
                            O Dr. Danipkar é cirurgião cardio vascular e mostrará abordagens em casos cirúrgicos e agudos.<br>
                            O Dr. Paresh é o criador do programa Vital Quest e trabalha com o Dr. Sankaran há 1 década.
                        </p>

                        <br>

                        <p><span><b>3ª semana: (My Week with Rajan)</b></span>
                        <ul class="content-list">
                            <li>
                                <i class="fa fa-calendar"></i>
                                Semana inteira, exceto quarta-feira, de casos clínicos ao vivo com Dr. Rajan Sankaran, das 09hrs às 17hrs (3 ou 4 casos diários).
                            </li>
                            <li>
                                <i class="fa fa-calendar"></i>
                                Quarta feira com dr. Jayesh (método meditativo de exploração da sensação vital)
                            </li>
                        </ul>
                        </p>

                        <br>

                        <p><span><b>Dia 10/03/2019: WISE</b></span><br>
                            <ul class="content-list">
                            <li>
                                <i class="fa fa-calendar"></i>
                                Experiência prática e meditativa conduzida pelo Dr. Sankaran dentro da "outra canção" cada um de nós.
                            </li>
                        </ul>
                            
                        </p>
                        
                        <br>

                        <h3 class="tagline">Contato</h3>
                        <p>
                            <span><b>Marina Di Ruzze</b></span><br>
                            <span><span href="tel:(41)3015-0501" class="mobile-only">(41) 99854-9530</span> / <span href="tel:(41)3015-0501" class="mobile-only">(41) 3013-0588</span></span><br>
                            Diretora<br>
                            Sorrento Viagens 
                        </p>
                        <br>

                        <p>Este evento é uma realização da the other song, juntamente com a empresa Sorrento Viagens.</p>
                        <br>

                        <h3 class="tagline" style="text-decoration: underline;">O curso é exclusivo para médicos ou dentistas homeopatas, porém o tour é extensível para acompanhantes.</h3>

                        <br><br>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                  <h2 class="black"></h2>
                    <img src="../images/eventos/viagem_2semanas.jpg" class="responsive" style="max-width: 700px"><br>
                    <br>
                    <img src="../images/eventos/viagem_2semanas&tour.jpg" class="responsive" style="max-width: 700px"><br>
                    <br>
                    <img src="../images/eventos/viagem_3semanas.jpg" class="responsive" style="max-width: 700px"><br>
                    <br>
                    <img src="../images/eventos/viagem_3semanas&tour.jpg" class="responsive" style="max-width: 700px"><br>
                </div>
            </div>
        </div>
    </section>

  </div>
</body>

@include('templates.footer')

@include('templates.scripts')

</html>