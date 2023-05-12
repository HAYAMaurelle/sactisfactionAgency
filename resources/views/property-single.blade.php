<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SatisfactionAgency - Appartements</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/" rel="icon">
  <link href="/img/" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

  <!--link de formulaire de réservation-->
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

<body>
  @include('layouts.header')

  <main id="main">
    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Cotonou</h1>
              <span class="color-text-a">Akpakpa</span>
            </div>
          </div>
          
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div id="property-single-carousel" class="swiper">
              <div class="swiper-wrapper">
                <div class="carousel-item-b swiper-slide">
                  <img src="/img/app/WhatsApp Image 4.jpg" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="/img/app/WhatsApp Image 3.jpg" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="/img/app/WhatsApp Image 2.jpg" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="/img/app/WhatsApp Image 1.jpg" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="/img/app/WhatsApp Image 5.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="property-single-carousel-pagination carousel-pagination"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">

            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Détails</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Appartements ID:</strong>
                        <span>1134</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Location:</strong>
                        <span>Cotonou Akpakpa</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Property Type:</strong>
                        <span>Appartements meublés</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Surface:</strong>
                        <span>40m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Chambres:</strong>
                        <span>3</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Douche:</strong>
                        <span>2</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Garage:</strong>
                        <span>1</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Prix</strong>
                        <span>30000 FCFA</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Appartement Description</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                    Cet appartement construit entre 2019-2020 est un appartement de 40m² situé au deuxième étage de notre immeuble
                    <b>RARE CONCEPTION</b> a côté de la banque ora-bank en quittant sacre-coeur. Il dispose de trois chambres avec chacune
                    leur douches et d'une douche visiteur. Le salon est très spacieux et il y a de grande fenêtre pour faire entrer la lumière du
                    jour. Le soir vous pourriez tiré les beaux rideaux de <b>NANAWAX</b> afin de bénéficier d'un confort aisé
                  </p>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </div>     
    </section>
    
    <!--formulaire de paiement-->
    <section>
      <div class="container">
        <div class="col-md-6 col-lg-4 section-ms-t2 color-d">
          <button type="button" class=" btn-outline-success" data-toggle="modal" data-target="#myModal">
            RESERVER
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
                      RESERVER
                    </button>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>    

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

</html>