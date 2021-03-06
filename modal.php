<style type="text/css">
	.modal-overlay {
	    position: fixed;
	    top: 0;
	    left: 0;
	    right: 0;
	    bottom: 0;
	    background: transparent;
	    z-index: 200;
	    transition: all .5s;
	    -moz-transition: all .5s;
	    -webkit-transition: all .5s;
	    -o-transition: all .5s;
	    display: none;
	    z-index: 999;
	}

	.modal-lite{
		padding: 15px;
	}

	#modal-contato {
	    height: 345px;
	    width: 40%;
	    margin: 10% auto;
	    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
	    background: linear-gradient(#FFF, #fff,#EAEAEA);
	    position: relative;
	}

	#modal-contato h1, #modal-contato label {
		font-family: Coolvetica;
		background: #fff;
	}

	#modal-contato h1 {
		margin-bottom: 25px;
	}
	#modal-contato label {
		font-size: 18px;
	}

	#modal-contato form { 
		background: transparent;
	}

	.button-submit {
		display: inline-block;
		border: none;
		border-radius: 20px;
		padding: 10px 35px;
		color: white;
		background-color: #00c853 !important;
		margin-left: auto;
		margin-right: auto;
		float: right;
	}

	.btn-close {
		position: absolute;
		top: -7px;
		right: 2px;
		font-size: 30px;
		color: #C23A4A !important;
		cursor: pointer;
	}

	.btn-close:hover, .button-submit:hover {
		opacity: .8;
	}

	@media screen and (max-width: 480px) {
		#modal-contato {
		    height: auto;
		    width: 90%;
		    margin: 18% 5%;
		    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		    background: linear-gradient(#FFF, #fff,#D4D4D4);
		    position: relative;
		    display: inline-block;
		}
	}

	/*@media screen and (max-width: 900px) { 
		#modal-contato {
		    height: 400px;
		    width: 40%;
		    margin: 10% auto;
		    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		    background: linear-gradient(#FFF, #fff,#D4D4D4);
		    position: relative;
		}

	}*/
</style>
<div class="modal-overlay">
	<div id="modal-contato" class="modal-lite">
		<a class="btn-close"><i class="fa fa-window-close" aria-hidden="true"></i></a>
		<div class="modal-wrapper">
			<form class="form" data-toggle="validator" role="form" method="POST" action="envia_email.php">
				<div class="signup-block">
					<div class="col-md-12" align="center">
					<img src="https://www.roihero.com.br/sandbox/img/logo.png" border="0" style="position:relative; top:13px">
						<h1>Assine já</h1>
					</div>
					<div class="col-md-6">
						<div class="form-group">
			            	<label>Nome da Loja:</label>
			            	<input type="text" class="form-control" name="nome" placeholder="Nome da loja">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
			            	<label>Telefone:</label>
			            	<input type="text" class="form-control" name="telefone" placeholder="(xx) xxxx-xxxx">
						</div>
		                <div class="help-block with-errors"></div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
			            	<label>Email:</label>
			            	<input type="text" class="form-control" name="email" placeholder="example@example.com" required autofocus>
						</div>
		                <div class="help-block with-errors"></div>
		            </div>
		            <div class="col-md-12">
		            	<button class="button-submit" type="submit">Enviar</button>
		            </div>					
		        </div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('.btn-close').on('click', function() {
	   $(this).parent().parent().fadeOut();
	});

	function openModal(modal) {
	  modal = '#'+modal;
	  $(modal).parent().fadeIn(500);
	}
</script>