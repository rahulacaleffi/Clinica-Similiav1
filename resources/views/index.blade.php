<!DOCTYPE html>
<html>
<!--aasdasd -->
<!--Rahula-->
<head>
	<meta name="google-site-verification" content="6_LfQLKXXnQlVYDTPM43irTbGeDxPO4rDoWfR3HSMXs" />
	<meta charset="utf-8">
	<title>Clínica Similia</title>
	<meta name="description" content="Clínica Similia. Especialista em Homeopatia. Venha conhecer a melhor clínica de Homeopatia em Curitiba.">
	<meta name="keywords" content="clínica similia, similia, homeopatia Curitiba, clínica similia Curitiba, médico homeopata, médico em curitiba, clinica homeopatia Brasil, homeopatia Brasil, clinica homeopatia Paraná, homeopatia Paraná, clinica homeopatia Curitiba, homeopatia Curitiba, clinica homeopatia Batel, homeopatia Batel, Avenida Visconde de Guarapuava 5500">
	<meta name="author" content="IntraZone, Rahula Palú Caléffi">

	<!-- Responsivo Mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Carousel -->
	<link rel="stylesheet" href="<?= asset('css/dist/slick/slick.css') ?>">
	<link rel="stylesheet" href="<?= asset('css/dist/slick/slick-theme.css') ?>">

	<!-- Fancybox -->
	<link rel="stylesheet" href="<?= asset('css/dist/jquery.fancybox.min.css') ?>">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?= asset('css/dist/bootstrap/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= asset('css/dist/bootstrap/bootstrap-dialog.css') ?>">

	<!-- JQuery -->
	<link rel="stylesheet" href="<?= asset('css/dist/jquery-ui.css') ?>">

	<!-- Other CSS Files -->
	<link rel="stylesheet" href="<?= asset('css/dist/font-awesome/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= asset('css/dist/animate.min.css') ?>">
	<link rel="stylesheet" href="<?= asset('css/dist/timePicker.css') ?>">

	<!-- Estilos -->
	<link href="<?= asset('css/dist/style.css') ?>" rel="stylesheet">

	<!--Favicon-->
	<link rel="shortcut icon" href="<?= asset('images/icone.png') ?>" type="image/x-icon">
	<link rel="icon" href="<?= asset('images/icone.png') ?>" type="image/x-icon">

</head>


<body>

	<div class="page-wrapper">

		@include('templates.header')

		@include('templates.navbar')

		<div class="hero-slider">
			<!-- <div class="slider-item slide1" style="background-image:url(<?= asset('images/banner.jpeg') ?>); opacity: 0; background-size: contain; background-position: left;">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="content style text-right">
								<h2 class="text-white text-bold mb-2">Consultas</h2>
								<p class="tag-text mb-5">Clínica especializada em Homeopatia. Marque já sua consulta.</p>
								<a href="/consultas" class="btn btn-main btn-white" style="width: 240px">Marque sua Consulta</a>
							</div>
						</div>
					</div>
				</div>
			</div> -->

			<div class="slider-item slide1" style="background-image:url(<?= asset('images/banner.jpeg') ?>); opacity: 0; background-size: contain; background-position: left;">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="content style text-right">
								<h2 class="text-white text-bold mb-2">Clínica</h2>
								<p class="tag-text mb-5">Centro de tratamento aos pacientes e aperfeiçoamento de homeopatas de todo o país.</p>
								<a href="/clinica" class="btn btn-main btn-white" style="width: 240px">Conheça a Clínica</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item" style="background-image:url(<?= asset('images/banner.jpeg') ?>); opacity: 0; background-size: contain; background-position: left;">
				<div class="container">
					<div class="row">
						<div class="col-12">

							<div class="content style text-right">
								<h2 class="text-white text-bold mb-2">Equipe</h2>
								<p class="tag-text mb-5">Quadro de profissionais dos mais gabaritados de Curitiba.</p>
								<a href="/equipe" class="btn btn-main btn-white" style="width: 240px">Conheça a Equipe</a>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="slider-item" style="background-image:url(<?= asset('images/banner.jpeg') ?>); opacity: 0; background-size: contain; background-position: left;">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="content style text-right">
								<h2 class="text-white text-bold mb-2">Cursos</h2>
								<p class="tag-text  mb-5">Única clínica-escola reconhecida oficialmente pela the other song Academy.</p>
								<a href="/cursos" class="btn btn-main btn-white" style="width: 240px">Conheça os Cursos</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<section class="cta" style="background: #efefef">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="cta-block">
							<div class="emmergency item">
								<i class="fa fa-phone"></i>
								<h2>Telefone</h2><br>
								<span href="tel:4130150501" class="mobile-only">(41) 3015-0501</span><br>
								<br>
								<i class="fa fa-whatsapp"></i>
								<h2>WhatsApp</h2><br>
								<span>Consultas:</span><br>
								<span>Dr. Carlos: </span><span href="https://api.whatsapp.com/send?phone=5541988336975" target="_blank" class="mobile-only"><b>(41) 98833-6975</b></span><br>
								<span>Dr. Diogo: </span><span href="https://api.whatsapp.com/send?phone=5541997007334" target="_blank" class="mobile-only"><b>(41) 99700-7334</b></span><br>
								<span>Cursos: </span><span href="https://api.whatsapp.com/send?phone=5541991770501" target="_blank" class="mobile-only"><b>(41) 99177-0501</b></span><br>
							</div>
							<div class="top-doctor item">
								<i class="fa fa-map-marker"></i>
								<h2>Endereço</h2><br>
								<p>Avenida Visconde de Guarapuava, 5500<br>Batel, Curitiba/PR</p>
								<a class="btn btn-main" target="_blank" href="https://www.google.com.br/maps/place/Av.+Visc.+de+Guarapuava,+5500+-+Batel,+Curitiba+-+PR/@-25.4462496,-49.2955425,17z/data=!3m1!4b1!4m5!3m4!1s0x94dce38fc146b5f7:0x6ccd60c15da1061a!8m2!3d-25.4462545!4d-49.2933538">Ver no mapa</a>
							</div>
							<div class="working-time item">
								<i class="fa fa-hourglass-o"></i>
								<h2>Horário de atendimento</h2><br>
								<ul class="w-hours">
									<li>Segunda à Sexta<span>9:00 - 18:00</span></li>
								</ul>
								<!-- <a class="btn btn-main btn-white" target="_blank" href="consultas.html">Marque sua consulta</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



		<section class="team-section section">
			<div class="container" style="margin-top: -50px;">
				<div class="section-title contents text-center" >
					<span class="spanlinha" style="min-width: 600px;background: transparent;padding: 0px 0px 70px 120px;border-bottom: 2px solid gray;"></span>
					<h3>
						<span>Conheça a nossa</span> Equipe
					</h3>

				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="team-member">
							<img src="<?= asset('images/team/carlos.jpg') ?>" class="img-responsive">
							<div class="contents text-center">
								<h4>Dr. Carlos Eduardo Leitão</h4>
								<p style="font-weight: 500;">Médico homeopata <br> Professor</p>
								<a href="equipe" class="btn btn-main">Saiba mais</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="team-member">
							<img src="<?= asset('images/team/diogo.jpg') ?>" class="img-responsive">
							<div class="contents text-center">
								<h4>Dr. Diogo Olive Gomes</h4>
								<p style="font-weight: 500;">Médico homeopata <br> Especialista em medicina de família</p>
								<a href="equipe" class="btn btn-main">Saiba mais</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-sm-offset-3 col-xs-12">
					<div class="team-member">
						<img src="<?= asset('images/team/chris.jpeg') ?>" class="img-responsive">
						<div class="contents text-center">
							<h4>Christiane Fernanda dos Santos</h4>
							<p style="font-weight: 500;">Administradora</p>
							<a href="equipe" class="btn btn-main">Saiba mais</a>
						</div>
					</div>
				</div>
			</div>
		</section>



	<section class="service-tab-section section" style="margin-top: -50px; background: #efefef;">
		<div class="outer-box clearfix">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title contents text-center" >
							<span class="spanlinha" style="min-width: 600px;background: transparent;padding: 0px 0px 70px 120px;border-bottom: 2px solid gray;"></span>
							<h3>
								<span>Conheça a</span> Homeopatia
							</h3>

						</div>

						<div class="tabs">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active" style="width: 160px;">
									<a href="#bases" data-toggle="tab">Bases</a>
								</li>
								<li role="presentation">
									<a href="#principios" data-toggle="tab" style="width: 160px;">Princípios</a>
								</li>
								<li role="presentation">
									<a href="#tratamento" data-toggle="tab" style="width: 160px;">Tratamento</a>
								</li>
								<li role="presentation">
									<a href="#metodo" data-toggle="tab" style="width: 160px;">Método</a>
								</li>
							</ul>
						</div>
						<div class="tab-content" style="background: white; border-radius: 10px;">

							<div class="service-box tab-pane fade in active" id="bases">
									
								<div class="col-md-12" style="margin-top: 15px">
									<div class="contents">

										<div class="text" style="float: right;">
											
											<img class="homeopatiaimg img-responsive" style="margin-bottom: 10px; margin-right: 20px;" src="<?= asset('images/background/hahnemann.jpg') ?>">
											<div class="section-title" align="center">
												<h3>Bases</h3>
											</div>
											<p>A homeopatia nasceu das ideias e das práticas de um médico alemão, chamado Samuel Hahnemann, que viveu entre 1755 e 1843.</p>

											<p>A característica fundamental dessa medicina, aquilo mesmo que a define, é o emprego de medicamentos segundo o princípio de semelhança, também chamado de Lei de similitude. Isto quer dizer que ela usa para curar uma doença uma substância capaz de provocar sintomas semelhantes. Esse princípio se opõe exatamente ao utilizado pela escola alopática, que busca uma substância que age de forma contrária à enfermidade. Assim, diante de uma insônia, enquanto o método alopático prescreve uma droga de efeitos soníferos, a homeopatia indicará uma substância que pode produzir a mesma insônia que o paciente sofre. Esta característica é responsável inclusive pela denominação dessa ciência, pois o prefixo “homo” significa semelhante e o radical “patia” quer dizer doença, lembrando ainda que prefixo grego “alo” expressa aquilo que é contrário. Estes dois métodos terapêuticos atravessaram, na verdade, muitos séculos, pois desde a Grécia antiga a escola de Cos, representada por Hipócrates, já defendia o emprego dos semelhantes, em oposição à escola de Cnido, preconizada pelo médico Galeno, que indicava o uso dos opostos para a cura das enfermidades.</p>

											<p>No emprego da lei dos semelhantes, a homeopatia usa substâncias oriundas da natureza, de fontes vegetais, animais ou minerais. No entanto não deve ser confundida com a fitoterapia, que utiliza chás, infusões e outras formas de uso de ervas medicinais, mas que não obedece à lei dos semelhantes. De modo geral a homeopatia preconiza o uso de um medicamento de cada vez e, raramente ele será associado a outro.</p>

											<p>Há que se considerar ainda um importante fator que em homeopatia chamamos de “terreno”. Enquanto a Alopatia se empenha no tratamento do órgão doente, ou da doença propriamente dita, a homeopatia investe toda sua potencialidade no tratamento do doente. Este é visto como uma unidade, como um todo indivisível, de modo que o motivo do tratamento homeopático passa a ser o doente e não as suas doenças isoladamente. Poderemos comparar este fato com o extermínio de plantas nocivas que crescem em determinado ambiente. O método alopático irá cuidar de extirpá-las, jogando-lhes venenos ou simplesmente arrancando-as. A homeopatia irá estudar o terreno onde elas estão crescendo e aplicará um estímulo para que estas condições ambientais sejam modificadas. Assim a homeopatia estará na verdade tratando o ambiente e não as plantas em si mesmas. Estará estimulando uma modificação neste ambiente, para que essas plantas deixem de nascer ali. Quando simplesmente as arrancamos, deixamos o terreno susceptível para que as mesmas plantas, ou outras piores ainda, voltem a nascer no mesmo lugar, uma vez que este continua convidativo aos seus desenvolvimentos. O tratamento do doente como um todo pressupõe o conhecimento de todo o indivíduo, de seu processo de vida, de peculiaridades de sua personalidade, de seus traumas, de suas fraquezas e pendores. Isso faz da homeopatia um processo que trabalha o indivíduo por inteiro e por isso, ao visitar um médico homeopata, esteja disposto a levar-lhe, não somente as suas queixas físicas, mas também a sua alma.</p>
										</div>
									</div>
								</div>
							</div>

							<div class="service-box tab-pane fade in" id="principios">
								<div class="col-md-12" style="margin-top: 15px">
									<div class="contents">
										
										<div class="text" style="float: right;">
											<img class="homeopatiaimg img-responsive" style="margin-bottom: 10px; margin-right: 20px;" src="<?= asset('images/background/homeopathy.jpg') ?>">
											<div class="section-title" align="center">
												<h3>Princípios</h3>
											</div>
											<p>A Homeopatia (homeos = semelhante - pathos = doença) é uma especialidade médica que trata os pacientes de uma forma global (holística) e não exclusivamente seus sintomas. O homeopata vê o indivíduo como um todo e procura, através de medicamentos, mantê-lo equilibrado. Homeopatia é baseada em 4 pilares: <br>
												<ul class="content-list">
													<li>
														<i class="fa fa-dot-circle-o"></i>
														<span class="topic">Lei da Semelhança:</span> A substância que provoca uma doença artificialmente tem o poder de curar a mesma doença que se instalou naturalmente. <i>“Similia similibus curentur” - Hipócrates</i>
													</li>
													<li>
														<i class="fa fa-dot-circle-o"></i>
														<span class="topic">Experimentação na pessoa sadia (patogenesias):</span> A fim de conhecerem as potencialidades terapêuticas dos medicamentos, as substâncias são ministradas a pessoas sadias para determinar-se as alterações da saúde nelas observado.
													</li>
													<li>
														<i class="fa fa-dot-circle-o"></i>
														<span class="topic">Medicamento único:</span> Um medicamento por vez, levando-se em conta a totalidade sintomática do paciente.
													</li>
													<li>
														<i class="fa fa-dot-circle-o"></i>
														<span class="topic">Doses infinitesimais:</span> A preparação homeopática dos medicamentos segue uma técnica própria que consiste em diluições infinitesimais seguidas de sucussões rítmicas para despertar as propriedades latentes da substância. Isso é chamado de "dinamização" ou "potencialização" do medicamento.
													</li>
												</ul>

											</p>
										</div>
									</div>
								</div>
							</div>

							<div class="service-box tab-pane fade in" id="tratamento">
								<div class="col-md-12" style="margin-top: 15px;">
									<div class="contents">
										
										<div class="text" style="float: right;">
											
											<img class="homeopatiaimg img-responsive" style="margin-bottom: 10px; margin-right: 20px;" src="<?= asset('images/background/tratamento.jpg') ?>">
											<div class="section-title" align="center">
												<h3>Tratamento</h3>
											</div>
											
											<p>A homeopatia é um sistema médico bicentenário de cura, baseado no Holismo e na Individualização. Ele parte do entendimento que a doença é um desequilíbrio na energia vital, a qual é responsável pela manutenção do bom funcionamento dos órgãos e sistemas e do sentimento de bem estar - o que chamamos SAÚDE.</p>

											<p>HOLISMO (Holos = todo) é a compreensão que o indivíduo (in=não, dividuo= divisível) é um único complexo de corpo, energia e consciência e que se alguma parte do organismo está doente então todo o organismo está doente.</p>

											<p>Também entendemos que cada indivíduo é absolutamente único, assim como o seu adoecimento, e que não há como tratar uma doença sem compreender o que ela produz no paciente como um todo, em seu processo único de adoecer e de curar-se.</p>

											<p>A consulta homeopática é um espaço aberto, onde tudo é importante: sintomas, sentimentos e pensamento, pois o desequilíbrio precisa ser investigado tanto no nível físico quanto emocional, tanto no nível consciente quanto inconsciente. Segue os princípios básicos de uma consulta médica pois é necessária a boa anamnese, exame físico para que se faça o diagnóstico patológico, Mas isso é só uma pequena parte. A maior parte do tempo é dedicado a compreender como essa específica doença afeta essa pessoa em especial.</p>

											<p>O objetivo final é encontrar a substância na natureza cujo padrão de energia é identico ao padrão do desequilíbrio em questão e que assim tem o poder de curá-lo. Também objetiva ajudar o paciente a tornar-se consciente de seu desequilíbrio e das consequências dele e de poder mudar os fatores que o favorecem.</p>

											<p>O tratamento homeopático em si não é uma consulta ou um remédio, é um percurso em direção à cura. Cada paciente tem o seu caminho, até perceber que a doença é um padrão que podemos descartar e seguir uma vida saudável e plena, rumo aos mais altos fins de nossa existência.</p>
										</div>
									</div>
								</div>
							</div>

							<div class="service-box tab-pane fade in" id="metodo">
								<div class="col-md-12" style="margin-top: 15px">
									<div class="contents">
										
										<div class="text">
											
											<img class="homeopatiaimg img-responsive" style="margin-bottom: 10px; margin-right: 20px;" src="images/background/dr-rajan-sankaran.jpg">
											<div class="section-title" align="center">
												<h3>Método</h3>
											</div>
											<p>O método do Dr. Rajan Sankaran consiste em uma estratégia extremamente eficaz de se chegar no remédio homeopático mais indicado em cada caso, utilizando-se a totalidade das informações e experiências profundas descritas pelo paciente através de técnicas inovadoras de anamnese homeopatica.</p>

											<p>Esse método representa o maior avanço da Homeopatia nos últimos 100 anos. Vem sendo desenvolvido e aperfeiçoado pelo Dr. Sankaran, detalhado e explicado em seus mais de 20 livros e ilustrado por centenas de casos curados em 30 anos de prática clínica bem sucedida e que o tornou o mais comentado e estudado autor contemporâneo.</p>

											<p>Faz da SINERGIA a base da prescrição, que consiste em utilizar todos os conhecimentos acumulados em mais de 200 anos de homeopatia somado a conceitos inéditos como a classificação dos remédios em reinos e famílias, a compreensão dos miasmas, etc.</p>

											<p>O sucesso dessa metodologia propiciou o surgimento de uma escola denominada the other song Academy em Mumbai, para onde concorrem homeopatas de todas as partes do mundo para estudar e vivenciar a medicina em seu mais alto nível.</p>
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


	@include('templates.contact-section')

	</div>
</body>

@include('templates.footer')

@include('templates.scripts')

<script type="text/javascript">
	$(function(){
		$(".slider-item").css("visibility", "initial !important");
	});
</script>

</html>