<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Ajax com jQuery</title>

		<!-- estilos -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">

		<!-- script -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="script.js"></script>
		
	</head>

	<body>

		<!-- menu -->
		<div class="nav-side-menu">
		    <div class="brand">SEU LOGO AQUI</div>
		    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
		  
		        <div class="menu-list">
		  
		            <ul id="menu-content" class="menu-content collapse out">
		                <li>
		                  <a href="index.php"><i class="fa fa-tachometer-alt sidebar-icon"></i> Dashboard</a>
		                </li>
		                
		                <li data-toggle="collapse" data-target="#ajuda" class="collapsed">
		                    <a href="#"><i class="fa fa-life-ring sidebar-icon"></i> Ajuda <span class="arrow"><i class="fa fa-angle-down"></i></spam></a>
		                </li>
		                <ul class="sub-menu collapse" id="ajuda">
		                    <li><a href="#" id="documentacao"><i class="fa fa-angle-right"></i> Documentação</a></li>
		                    <li><a href="#" id="suporte"><i class="fa fa-angle-right"></i> Suporte <small><i class="fa fa-external-link"></i></small></a></li>
		                </ul>
		            </ul>
		     </div>
		</div>

		<!-- paginas -->
		<div class="main" id="pagina">
		    
		    <div class="container">

		    	<div class="row">
		    		<div class="col">
						
						<form>
							<div class="form-group row">
								<label class="col-sm-9 col-form-label">Competência:</label>
								<div class="col-sm-3">
									<select class="form-control-plaintext" id="competencia">
										<option value="">-- Selecione </option>
										<option value="2024-09">Setembro / 2024</option>
										<option value="2024-10">Outubro / 2024</option>
										<option value="2024-11">Novembro / 2024</option>
									</select>
								</div>
							</div>
						</form>

						<hr />

		    		</div>
		    	</div>
		    	
		    	<div class="row mb-3">
		    		<div class="col-md-4">
		    			<div class="card">
							<div class="card-header">
								Número de vendas
							</div>
							<div class="card-body">
								 <h5 class="card-title" id="numeroVendas">?</h5>
							</div>
						</div>
					</div>

					<div class="col-md-4">
		    			<div class="card">
							<div class="card-header">
								Total de vendas
							</div>
							<div class="card-body">
								 <h5 class="card-title" id="totalVendas">?</h5>
							</div>
						</div>
		    		</div>

				</div>

				<div class="row mb-3">
					<div class="col-md-4">
		    			<div class="card">
							<div class="card-header">
								Clientes ativos
							</div>
							<div class="card-body">
								 <h5 class="card-title" id="clientes_ativos">?</h5>
							</div>
						</div>
					</div>

					<div class="col-md-4">
		    			<div class="card">
							<div class="card-header">
								Clientes inativos
							</div>
							<div class="card-body">
								 <h5 class="card-title" id="clientes_inativos">?</h5>
							</div>
						</div>
		    		</div>
		    	</div>

		    	<div class="row mb-3">
					<div class="col-md-4">
		    			<div class="card">
							<div class="card-header">
								Total de reclamações
							</div>
							<div class="card-body">
								 <h5 class="card-title" id="reclamacoes">?</h5>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
		    			<div class="card">
							<div class="card-header">
								Total de elogios
							</div>
							<div class="card-body">
								 <h5 class="card-title" id="elogios">?</h5>
							</div>
						</div>
		    		</div>

		    		<div class="col-md-4">
		    			<div class="card">
							<div class="card-header">
								Total de sugestões
							</div>
							<div class="card-body">
								 <h5 class="card-title" id="sugestoes">?</h5>
							</div>
						</div>
		    		</div>
		    	</div>

		    	<div class="row mb-3">
					<div class="col-md-4">
		    			<div class="card">
							<div class="card-header">
								Total de despesas
							</div>
							<div class="card-body">
								 <h5 class="card-title" id="totalDespesas">?</h5>
							</div>
						</div>
					</div>
		    	</div>
		    </div>

		</div>

	</body>

</html>