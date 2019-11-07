<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="http://localhost/twitter/styles.css">
  </head>
  <body>
      
      <nav class="navbar navbar-light bg-faded">
  <a class="navbar-brand" href="http://localhost/twitter/">Twitter</a>
  <ul class="nav navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="?page=timeline">Your timeline</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?page=yourtweets">Your tweets</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?page=publicprofiles">Public Profiles</a>
    </li>
  </ul>
  <div class="form-inline pull-xs-right">
      
      <?php if ($_SESSION['id']) { ?>
      
        <a class="btn btn-success-outline" name="Logout" href="?function=logout">Logout</a>
      
      <?php } else { ?>
      
    <button class="btn btn-success-outline" data-toggle="modal" data-target="#myModal">Login/Signup</button>
      
      <?php } ?>
  </div>
</nav>