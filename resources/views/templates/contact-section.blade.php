<section class="appoinment-section section" id="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="accordion-section">
					<div class="section-topic-title">
						<h3>FAQ</h3>
						<legend class="withoutborder">Dúvidas frequentes</legend>
					</div>
					<div class="accordion-holder">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Informações de contato
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body item">
										<i class="fa fa-phone" style="font-size: 1.5em"></i><span href="tel:4130150501" class="mobile-only" style="padding-left: 5px;">(41) 3015-0501</span><br><br>
										<span>
										<i class="fa fa-whatsapp" style="font-size: 1.5em"></i>
											Consultas:<br>
											<span style="padding-left: 25px;">Dr. Carlos: <span href="https://api.whatsapp.com/send?phone=5541988336975" target="_blank" class="mobile-only">(41) 98833-6975</span><br></span>
											<span style="padding-left: 25px;">Dr. Diogo: <span href="https://api.whatsapp.com/send?phone=5541997007334" target="_blank" class="mobile-only">(41) 99700-7334</span><br></span>
											<span style="padding-left: 25px;">Cursos: <span href="https://api.whatsapp.com/send?phone=5541991770501" target="_blank" class="mobile-only">(41) 99177-0501</span></span>
										</span>
										<br><br>
										<i class="fa fa-map" style="font-size: 1.5em"></i><span style="padding-left: 5px;">Avenida Visconde de Guarapuava, 5500 - Batel, Curitiba/PR</span>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
										aria-controls="collapseTwo">
										Qual é o hórário de atendimento?
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
									<h2>Horário de atendimento</h2>
									<br>
									<i class="fa fa-hourglass-o"></i><br>
									<div class="row">
										<p>
											<div class="col-md-6 col-sm-12 col-xs-12">
											Segunda à Sexta &nbsp;&nbsp;&nbsp;</div><div class="col-md-6 col-sm-12 col-xs-12"> 9:00 - 18:00</div>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
									aria-controls="collapseThree">
									A Homeopatia é especialidade médica?
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								A Homeopatia é uma especialidade médica, reconhecida pelo CFM (Conselho Federal de Medicina) desde 1980. A partir de 1990, a AMHB (Associação Médica Homeopática Brasileira) passou a fazer parte do Conselho de Especialidades Médicas da AMB (Associação Médica Brasileira), oficialmente e, desde então, realiza anualmente a prova para obtenção de Título de Especialista em Homeopatia em convênio com a AMB / CFM. 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-sm-12 col-xs-12">
		<div class="contact-area">
			<div class="section-topic-title">
				<h3>Contato</h3>
				<legend class="withoutborder">Preencha os campos abaixo</legend>
				
			</div>
			<form name="contact_form" class="default-form contact-form" action="sendmail.php" method="post">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="form-group">
							<input type="text" name="nome" placeholder="Nome" required="">
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="form-group">
							<input type="text" name="tel" placeholder="Telefone" required=""  OnKeyPress="formatar('##-#####-####', this)">
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<input type="text" name="email" placeholder="E-mail" required="" >
						</div>
						<div class="form-group">
							<label>Assunto</label>
							<select name="assunto">
								<option selected=""></option>
								<option>Geral</option>
								<option>Consultas</option>
								<option>Cursos</option>
								<option>Dúvidas</option>
							</select>

						</div>
						<div class="form-group">
							<textarea name="form_message" placeholder="Mensagem" required=""></textarea>
						</div>
						<div class="form-group text-center">
							<button type="submit" class="btn-style-one">Enviar</button>
						</div>
					</div>
				</div>
			</form>
		</div>                        
	</div>
	</div>                    
</div>
</section>