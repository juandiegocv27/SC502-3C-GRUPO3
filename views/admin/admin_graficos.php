<!DOCTYPE html>
<html>
<head>
	<title>Graficos con plotly</title>
	<link rel="stylesheet" type="text/css" href="/build/lib/bootstrap/css/bootstrap.css">
	<!-- <script src="/build/lib/jquery-3.3.1.min.js"></script> -->
	<script src="/build/lib/plotly-latest.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>


</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">
					<div class="panel panel-heading">
						Graficas con plotly js (facultad autodidacta)
					</div>
					<div class="panel panel-body">
						<div class="row">
							<div class="col-sm-6">
								<div id="cargaLineal"></div>
							</div>
							<div class="col-sm-6">
								<div id="cargaBarras"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#cargaLineal').load('lineal.php');
		$('#cargaBarras').load('barras.php');
	});
</script>