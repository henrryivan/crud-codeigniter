<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Demografias</title>
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<!-- Custom Styles -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
	<h1 class="text-center mt-3 mb-5">Demografias</h1>

	<div class="container">
		<div class="row">
			<div class="col-lg-5 mb-3">
				<div class="title-medium mb-3">
					<i class="fas fa-chart-bar me-3"></i>
					NUEVA DEMOGRAFÍA
				</div>
				<div id="form">
					<div class="row">
						<input class="form__input" type="hidden" id="id">
					</div>
					<div class="row">
						<input id="txtTitulo" class="form__input mb-5" placeholder="Nombre de demografía">
					</div>
					<div class="row">
						<textarea id="txtDescripcion" class="form__textarea mb-4" placeholder="Descripción de demografía"></textarea>
					</div>
					<button id="btn" class="btn-success rounded-pill w-100" value="ingresar">Ingresar</button>
				</div>
			</div>

			<div class="col-lg-7">
			
				<div class="title-medium mb-3">
					<i class="fas fa-th-large me-3"></i>
					LISTA DEMOGRAFÍAS
				</div>

				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">DEMOGRAFÍA</th>
							<th scope="col">DESCRIPCIÓN</th>
							<th scope="col" colspan="2">ACCIONES</th>
						</tr>
					</thead>

					<tbody id="tbody">

					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- Custom script -->
	<script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>
</html>
