<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>

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

</body>
</html>