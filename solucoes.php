
<!--comecando o html-->
	
<?php include("head.php"); ?> <!-- incluindo cabeçalho da página- abrinfo tag html -->
	
<?php include("menu.php"); ?><!-- incluindo o menu já com a tag body-->

<br><br>
<section class="container">
	
	<h3>Nossa ferramenta:</h3>
	<p class="text-justify">
		A Agência Enviar desenvolveu e está em constante aperfeiçoamento de uma ferramenta computacional
		que envia de forma automática mensagens de texto aos clientes nela cadastrados. Se você empreendedor(a)
		gostaria de estreitar as relações com seus clientes, ela é a ferramenta ideal.

		Em primeiro momento pode parecer que a ferramenta é algo simples, e talvez seja! Mas ela possui um grande
		valor, principalmente em situações onde se deseja levar uma informação especifíca à um cliente, lembrá-lo
		de que precisa retornar a sua empresa para realizar parte de um trabalho que esta sendo realizado contínuamente, 
		ou parabenizá-lo pelo aniversário, ou ainda mostrar a ele os produtos que sua loja oferece com preço diferenciado.
	</p>

</section>
	<div class="container-fluid" id="idProdutos">
		<br>
		<div class="container">
			<div class="row">
				
				<div class="col-md-4 thumbnail">
					<h3 class="text-center">Lembrete:</h3>
					<p>Lembre seus clientes e amigos de possíveis retornos a seu estabelecimento.</p>
					<p><a class="btn btn-info" href="#" role="button">Saiba mais sobre os lembretes via sms.</a></p>
					<img class="img-responsive" src="imagens/lembreteConsulta.jpg" alt="lembrete via sms">
				</div>
				<div class="col-md-4 thumbnail">
					<h3 class="text-center">Mensagem de Felicitações:</h3>
					<p>Todo cliente gosta de ser lembrado, então porque não parabenizá-lo em uma data tão importante
					como o seu aniversário?</p>
					<p><a class="btn btn-info" href="#" role="button">Saiba mais sobre as mensagens de felicitações.</a></p>
					<img class="img-responsive" src="imagens/felicitacoes.png" alt="mensagem de felicitações">
				</div>
				<div class="col-md-4 thumbnail">
					<h3 class="text-center">Campanha publicitária:</h3>
					<p>Divulgue seus produtos de uma maneira rápida e direta através do sms de marketing.</p>
					<p><a class="btn btn-info" href="#" role="button">Saiba mais sobre as mensagens publicitárias.</a></p>
					<img class="img-responsive" src="imagens/smsMarketing.png" alt="lembrete via sms">
				</div>
			</div>
		</div>
		<br>
	</div>

<section>
	<div class="container">
		<h3>A Política Anti-Spam da Enviar:</h3>
		<p class="text-justify">
			O serviço de envio de mensagens de texto muitas vezes é realizado de forma abusiva, de forma a perturbar
			e incomodar as pessoas que o recebem, visto que a entrega das mensagens pode ser realizado em horas inoportunas 
			da noite e na madrugada, de maneira exagerada e até mesmo de forma exploratória ou ameaçativa, sem qualquer
			autorização prévia de quem a recebe.

			A Agência Enviar NÃO realiza seu trabalho sob qualquer um dos itens citados acima, 
			repúdiando ao uso indevido desse meio de comunicação, sendo que esta se coloca no direito de deixar de 
			prestar o serviço a quem desejar ou tentar enviar mensagens nas condições acimas citadas.

			Todas as pessoas que receberem alguma informação via ferramenta desenvolvida pela Enviar, serão
			consultadas previamente sobre o recebimento do conteúdo, e receberão este em horário apropriado, de 
			maneira não abusiva, sendo possível a qualquer momento desativar o serviço de entrega de mensagens ao
			seu número.

		</p>
		<br>
		<h3>Teste de envio de sms</h3>
		<div id="id_form_teste">
			<form method="post" action=""> 
				<fieldset>
					<legend><h3 class="fonte">Enviando Mensagem de texto:</h3></legend>
					<label for="id_dd">Informe o DDD: </label><br>
					<input id="id_dd" type="text" name="dd" placeholder="55" required ><!-- required campo obrigatório e autofocus coloca o cursor no label-->	
					<br><br>
					<label for="id_fone">Telefone: </label><br>
					<input id="id_fone" type="text" name="numero" placeholder="988688228" required>
					<br><br>
					<label for="id_mensa">Mensagem:</label><br>
					<textarea id="id_mensa" name="mensagem" rows="5" cols="30" maxlength="500" required></textarea>

					<input type="hidden" name="acao" value="enviartorpedo">
				</fieldset>
				<br>
				<input type = "submit" class="btn btn-success btn-md" value="Enviar Mensagem">
				<hr>
				
			</form>
		</div>
	</div>
</section>

<?php include("footer.php"); ?><!-- inclui o rodapé- fechando a tag body e html-->