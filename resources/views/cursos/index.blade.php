<!DOCTYPE html>
<html>

<head>
    @include('templates.head')
</head>

<body>
  <div class="page-wrapper">

    @include('templates.header')

    @include('templates.navbar')


    <section class="page-title text-center parallax" style="background-image: url(<?= asset('images/cursos/sala.jpg') ?>);">
        <div class="container">
            <div class="title-text">
                <h1>Cursos</h1>
            </div>
        </div>
    </section>



    <section class="blog-section style-four section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12" style="float: right;">
                    <div class="right-side">
                        <div class="categorise-menu">
                            <div class="text-title">
                                <h6>Cursos</h6>
                            </div>
                            <ul class="categorise-list">
                                <li><a href="#metododasensacao" class="scrollSuave">Introdução ao Médoto da Sensação</a></li>
                                <li><a href="#wwr" class="scrollSuave">Wednesdays With Rajan (WWR)</a></li>
                                <li><a href="#macreprw" class="scrollSuave">MacRepertory e ReferenceWorks</a></li>
                                <li><a href="#casosmensais" class="scrollSuave">Casos Mensais com Dr. Sankaran</a></li>
                            </ul>                           
                        </div>
                    </div>
                </div>

                <div class="col-md-9 col-sm-12 col-xs-12" style="float: left">
                    <div class="left-side">
                        <div class="item-holder">
                            <!-- <div class="image-box">
                                <figure id="metododasensacao">
                                    <img src="../images/cursos/.jpg">
                                </figure>
                            </div> -->
                            <div class="content-text" id="metododasensacao">
                                <a href="cursos/metododasensacao"><h6>Introdução ao Método da Sensação</h6></a>
                                <p>Introdução ao Método da Sensação, desenvolvido pelo Dr. Rajan Sankaran, com apresentação de casos e discussões sobre as técnicas e a filosofia utilizadas.</p>
                                <div class="link-btn">
                                    <a href="cursos/metododasensacao" class="btn-style-one">Saiba mais</a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="item-holder">
                            <!-- <div class="image-box">
                                <figure id="wwr">
                                    <img src="../images/blog/5.jpg">
                                </figure>
                            </div> -->
                            <div class="content-text" id="wwr">
                                <a href="cursos/wwr"><h6>Wednesdays With Rajan (WWR)</h6></a>
                                <p>Curso de aperfeiçoamento no método da Sensação. Aulas semanais por meio de vídeoaulas com o Dr. Rajan Sankaran e tradução simultânea todas as quartas-feiras.</p>
                                <div class="link-btn">
                                    <a href="cursos/wwr" class="btn-style-one">Saiba mais</a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="item-holder">
                            <!-- <div class="image-box">
                                <figure id="macreprw">
                                    <img src="../images/blog/5.jpg" alt="Clinica Similia Curitiba - Homeopatia">
                                </figure>
                            </div> -->
                            <div class="content-text" id="macreprw">
                                <a href="cursos/macreprw"><h6>MacRepertory e ReferenceWorks</h6></a>
                                <p>Demonstração e cursos para uso dos programas Synergy - MacRepertory e Reference Works.</p>
                                <div class="link-btn">
                                    <a href="cursos/macreprw" class="btn-style-one">Saiba mais</a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="item-holder">
                            <!-- <div class="image-box">
                                <figure id="casosmensais">
                                    <img src="../images/blog/5.jpg" alt="Clinica Similia Curitiba - Homeopatia">
                                </figure>
                            </div> -->
                            <div class="content-text" id="casosmensais">
                                <a href="cursos/casosmensais"><h6>Casos Mensais com Dr. Sankaran</h6></a>
                                <p>Todos os meses haverá um caso ao vivo com pacientes brasileiros e tradução simultânea, atendido pelo Dr. Rajan Sankaran de Mumbai-India.</p>
                                <div class="link-btn">
                                    <a href="cursos/casosmensais" class="btn-style-one">Saiba mais</a>
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