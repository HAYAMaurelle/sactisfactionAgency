<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SatisfactionAgency- Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

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
<body >
    @include('layouts.header')

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div>
            <h2 class="text-center mb-2">Contactez-nous pour tous vos besoins</h2>
            <form method="POST" action="{{ route('contact.send') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="subject">Sujet :</label>
                    <input type="text" id="subject" name="subject" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" class="form-control" required style="height:100px;"></textarea>
                </div><br>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </div>
    @include('layouts.footer')
</body>
