<div id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-xs-12">

					<ul class= "nav navbar-nav navbar-left">
						<li class="link_menu"><a href="javascript:history.back()">Voltar</a></li>
					</ul>

					<div class="row">
						<img src="app/img/quem_somos.png" align="left" style="height: 400px; width: 400px;">
					</div>
				</div>

				<div class="col-md-7 col-xs-12">
					<h2 align="center">Tem alguma dúvida ou gostaria de alguma dica? Deixe-nos sua solicitação, será um prazer colaborar com suas descobertas sobre o café ;)</h2>
					
					<br>

					<form onsubmit="return false">
						<label>Nome de Usuário</label>
						<input id="nome" type="text" class="form-control" placeholder="Por favor, digite seu nome">

						<br>

						<label>Dúvidas e solicitações de dicas</label>
						<textarea id = "envio" class="form-control" placeholder="Deixe aqui sua solicitação ;)" rows="6" maxlength="300"></textarea>

						<br>

						<input type="submit" name="enviar" value="Enviar" class="btn btn-dark" onclick="valida()">

					</form>

				</div>

			</div>

		</div>

	</div>