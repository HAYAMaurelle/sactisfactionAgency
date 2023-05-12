<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Publicité pour votre appartement</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



  <!--ajout-->

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SatisfactionAgency</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

</head>
<body>

@include('layouts.header')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">SatisfactionAgency</a>
  <a class="navbar-brand" href="#">Publicité pour votre appartement</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">A propos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Main Content -->

    <!--le code que j'ai coupe la-->
    
	
  <!--Gestion-->
	<div class="container">
		<h2>Gestion des appartements</h2>
		<div class="row">
			<div class="col-md-4">
				<h3>Ajouter un appartement</h3>
				<form>
					<div class="form-group">
						<label for="titre">Titre:</label>
						<input type="text" class="form-control" id="titre">
					</div>
					<div class="form-group">
						<label for="description">Description:</label>
						<input type="text" class="form-control" id="description">
					</div>
					<button type="submit" class="btn btn-primary">Ajouter</button>
				</form>
			</div>
			<div class="col-md-8">
				<h3>Liste des appartements</h3>
				<table class="table">
					<thead>
						<tr>
							<th>Titre</th>
							<th>Description</th>
              <th>Adresse</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Appartement 1</td>
							<td>Cet appartement dispose d'une chambre et d'une salle de bain</td>
              <td>
                    Akpakpa Senade
              </td>
							<td>
								<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal1">Modifier</button>
								<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal2">Supprimer</button>
							</td>
						</tr>
						<tr>
							<td>Appartement 2</td>
							<td>Cet appartement dispose de deux chambres et d'une salle de bain</td>
							<td>
                  Akpakpa Suru-lere
              </td>
              <td>
								<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal1">Modifier</button>
								<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal2">Supprimer</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
  {{-- <div class="row my-4">
    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Appartements</h5>
          <p class="card-text">Gérez les appartements disponibles.</p>
          <a href="#" class="btn btn-primary">Voir les appartements</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Réservations</h5>
          <p class="card-text">Gérez les réservations existantes.</p>
          <a href="#" class="btn btn-primary">Voir les réservations</a>
        </div>
      </div>
    </div> --}}





    @include('layouts.footer')



