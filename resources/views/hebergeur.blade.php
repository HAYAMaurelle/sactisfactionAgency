{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SatisfactionAgency - Devenir Hebergeur</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/" rel="icon">
  <link href="/img/icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

  <!--Code pour gestion appartements-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- =======================================================
  * Template Name: EstateAgency
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
@include('layouts.header')

<body>


  <main id="main">

    <!-- ======= Intro Single ======= -->
   
    <!-- ======= About Section ======= -->
    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 position-relative">
            <div class="about-img-box">
              <img src="/img/" alt="" class="img-fluid">
            </div>
            <div class="sinse-box">
              <h3 class="sinse-title">SatisfactionAgency </h3>
              <p>Facilité & Visibilité</p>
            </div>
          </div>
          <div class="col-md-12 section-t8 position-relative">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <img src="/img/app/images (1).jpg" alt="" class="img-fluid">
              </div>
              
            
              <!--   <div class="col-lg-2  d-none d-lg-block position-relative">
                <div class="title-vertical d-flex justify-content-start">
                  <span>SatisfactionAgency</span>
                </div>
              </div>-->
              <div class="col-md-6 col-lg-5 section-md-t3">
                <div class="title-box-d">
                  <h1>Publicité pour votre appartement</h1>
                </div>
                 <!--formulaire de paiement-->
                <section>
                  <div class="container">
                    <div class="col-md-6 col-lg-6 section-ms-t2 color-d">
                      <button type="button" class=" btn-outline-success" data-toggle="modal" data-target="#myModal">
                        COMMENCER
                      </button>
                      <hr>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <!-- Modal Header -->
                          <div class="modal-header">
                            
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <!-- Modal body -->
                          <div class="modal-body">
                            <form action="">
                              <div class="form-group">
                                <label for="nom">Nom:</label>
                                <input type="text" class="form-control" id="nom">
                              </div>
                              <div class="form-group">
                                <label for="prenom">Prénom:</label>
                                <input type="text" class="form-control" id="prenom">
                              </div>
                              <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" required>
                              </div>
                              <div class="form-group">
                                <label for="adresse">Adresse:</label>
                                <input type="text" class="form-control" id="adresse">
                              </div>
                              <div class="form-group">
                                <label for="ville">Ville:</label>
                                <input type="text" class="form-control" id="ville">
                              </div>
                              <div class="form-group">
                                <label for="pays">Pays:</label>
                                <input type="text" class="form-control" id="pays">
                              </div>
                              <div class="form-group">
                                <label for="codepostal">Numéro de téléphone:</label>
                                <input type="phone" class="form-control" id="phone" required>
                              </div>
                              <div class="form-group">
                                <label for="amount">Montant à payer</label>
                                <input type="number" class="form-control" id="amount" required>
                              </div>
                              <div class="form-group">
                                <label for="expiration">Date d'expiration:</label>
                                <input type="text" class="form-control" id="expiration">
                              </div>
                              <div>
                                <button class="">
                                  S'INSCRIRE
                                </button>
                              </div>
                            </form>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </section>    

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <!-- =======Team Section ======= Devenez hebergeur -->
    <section class="section-about">
      <div class="container my-6">
        
        <p>Notre site offre de nombreux avantages pour promouvoir votre appartement.</p>
        
        <div class="row my-4">
          
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Facilité</h5>
                <p class="card-text">Publier votre annonce sur notre site est facile et rapide.
                   Il vous suffit de remplir un formulaire en ligne et votre annonce sera en ligne en quelques minutes.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Facilité</h5>
                <p class="card-text">Publier votre annonce sur notre site est facile et rapide.
                   Il vous suffit de remplir un formulaire en ligne et votre annonce sera en ligne en quelques minutes.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Facilité</h5>
                <p class="card-text">Publier votre annonce sur notre site est facile et rapide.
                   Il vous suffit de remplir un formulaire en ligne et votre annonce sera en ligne en quelques minutes.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Facilité</h5>
                <p class="card-text">Publier votre annonce sur notre site est facile et rapide.
                   Il vous suffit de remplir un formulaire en ligne et votre annonce sera en ligne en quelques minutes.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Visibilité</h5>
                <p class="card-text">Notre site est visité par de nombreux internautes en quête de logements.
                   En publiant votre annonce sur notre site, vous augmenterez considérablement votre visibilité.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Efficacité</h5>
                <p class="card-text">Notre site est conçu pour faciliter la recherche d'un logement.
                  Les internautes peuvent donc recherchés en fonction de leurs critères de sélection, cela augmente les chances que votre annonce soit repérée.
                  </p>
              </div>
            </div>
          <div class="container my-4">
  
  


    </section>
    <!-- End About Section-->


  

	<!-- Modal pour la modification d'un appartement -->
	<div class="modal fade" id="myModal1">
		<div class="modal-dialog">
   
  </main><!-- End #main -->

  @include('layouts.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>

</body>

</html> --}}