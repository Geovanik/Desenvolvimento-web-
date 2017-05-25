<!--comecando o html-->
	
<?php include("head.php"); ?> <!-- incluindo cabeçalho da página- abrinfo tag html -->
	
<?php include("menu.php"); ?><!-- incluindo o menu já com a tag body-->

<br><br><br>

<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Mande sua dúvida, sugestão ou crítica. </h2>
                    <h3 class="section-subheading text-muted">Estamos anciosos pelo seu contato!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span><label>Digite seu nome: </label></span><!-- lido apenas por leitores de tela-->
                                    <input type="text" class="form-control" placeholder="Digite seu nome *" id="name" required="" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                	<span><label>Digite seu email: </label></span><!-- lido apenas por leitores de tela-->
                                    <input type="email" class="form-control" placeholder="Digite seu email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                     <span><label>Digite o número do telefone para contato: </label></span><!-- lido apenas por leitores de tela-->
                                    <input type="tel" class="form-control" placeholder="Fone para contato *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Digite aqui sua mensagem *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-success btn-xl">Enviar mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<hr>

<?php include("footer.php"); ?><!-- inclui o rodapé- fechando a tag body e html-->