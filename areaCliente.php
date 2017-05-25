
<!--identado em cada pagina como se fosse unica-->

<?php include("head.php"); ?>

<?php include("menu.php"); ?>

<script type="text/javascript">
			 alert("Olá! Faça o cadastro de sua empresa agora e ganhe créditos grátis.")
    	</script>

<br>

	<!-- action="" indica para qual pagina sera direcionado os dados-->
	<form class="form-horizontal" method="post" action="" id="id_form_cadastro"> <!-- form control formata um pouco o form-->
		<div class="form-group">
			<h3 class="fonte">Cadastrando-se no sistema de envio de mensagens:</h3>

			<fieldset>
				<legend><h4 class="fonte"><hr>Dados da empresa:</h4></legend>
				
				<label class="col-sm-6 control-label" for="id_nome">*Nome da empresa: </label><!-- posiciona o label na coluna 6-->
				<div class="col-sm-2"><!-- conta 2 colunas a partir do label-->
					<input id="id_nome" type="text" name="nome" placeholder="agência enviar" size="26" required autofocus >
				</div>
				<br><br>

				<label class="col-sm-6 control-label" for="id_cnpj">*CNPJ: </label>
				<div class="col-sm-2">
					<input id="id_cnpj" type="text" name="cnpj" placeholder=" xx.xxx.xxx/yyyy-zz" size="26" required><!-- required campo obrigatório e autofocus coloca o cursor no label-->
				</div>
				<br><br>

				<label class="col-sm-6 control-label" for="id_email">*Email: </label>
				<div class="col-sm-2">
					<input id="id_email" type="Email" name="email" placeholder="empresa@mail.com.br" size="26" required>
				</div>
				<br><br>

				<label class="col-sm-6 control-label" for="id_telefone">*Telefone da empresa: </label>
				<div class="col-sm-2">
					<input id="id_telefone" type="text" name="telefone" placeholder="dddxxxx-xxxx" size="26" required>
				</div>
				<br><br>

				<label class="col-sm-6 control-label" for="id_celular">*Celular para contato: </label>
				<div class="col-sm-2">
					<input id="id_celular" type="text" name="celular" placeholder="ddd9xxxx-xxxx" size="26" required> 
				</div>
				<br>
				<h6 class="fonte">*Não esqueça de adicionar o dígito 9 para números da região sul do país.</h6>
	
				<fieldset>
					<legend><h4 class="fonte"><hr>Endereço completo:</h4></legend>
					<label class="col-sm-6 control-label" for="id_estado">*Estado: </label>
					<div class="col-sm-2">
						<select name="estado" required>
							<option value="">Selecione</option>
							<option value="SC">SC</option>
							<option value="RS">RS</option>
							<option value="PR">PR</option>
						</select>
					</div>
					<br><br>

					<label class="col-sm-6 control-label" for="id_cidade">*Cidade: </label>
					<div class="col-sm-2">
						<input id="id_cidade" type="text" name="cidade" placeholder="Chapecó" size="26" required>
					</div>
					<br><br>

					<label class="col-sm-6 control-label" for="id_bairro">*Bairro: </label>
					<div class="col-sm-2">
						<input id="id_bairro" type="text" name="bairro" placeholder="centro" size="26" required>
					</div>
					<br><br>

					<label class="col-sm-6 control-label" for="id_rua">*Rua: </label>
					<div class="col-sm-2">
						<input id="id_rua" type="text" name="rua" placeholder="Antonio Vargas" size="26" required>
					</div>
					<br><br>

					<label class="col-sm-6 control-label" for="id_numero">*Número e letra: </label>
					<div class="col-sm-2">
						<input id="id_numero" type="text" name="numeroletra" pattern="[0-9]{4}[a-zA-Z]" placeholder="1234A" required><!-- expressao regular-->
					</div>
					<br><br>

					<label class="col-sm-6 control-label" for="id_edificio">*Nome do edifício: </label>
					<div class="col-sm-2">
						<input id="id_edificio" type="text" name="edificio" placeholder="ed Vargas" size="26" required>
					</div>
					<br><br>

					<label class="col-sm-6 control-label" for="id_referencia">Ponto de referência: </label>
					<div class="col-sm-2">
						<input id="id_referencia" type="text" name="referencia" size="45">
					</div>
					<br>
					<p><h6 class="fonte">*Todos os campos maracdos com * devem ser preenchidos.<br>
						Entre em contato com o suporte em caso de dificuldade.</h6>
					</p>
					
				</fieldset>


				<fieldset><!-- fieldset escolha usuario e senha-->
					<legend class="fonte"><h4><hr>Dados para realizar login no sistema: </h4></legend>
					<label class="col-sm-6 control-label" for="id_usuario">*Usuário: </label>
					<div class="col-sm-2">
						<input id="id_usuario" type="text" name="usuario" placeholder="user" size="26" required>
					</div>
					<br><br>

					<label class="col-sm-6 control-label" for="id_senha">*Senha: </label>
					<div class="col-sm-2">
						<input id="id_senha" type="password" name="senha" size="26" required>
					</div>
					<br><br>

				</fieldset>
			</fieldset>
			
			<input type= "submit" class="btn btn-success btn-md" value="Realizar Cadastro" >
			<hr>
		</div>
	</form>
	
</div>

<?php include("footer.php"); ?>

