<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ville d'ARRAS</title>
    <link href="https://bootswatch.com/5/lux/bootstrap.rtl.min.css" rel="stylesheet" >
  </head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- sert a faire fonctionner la navbar (dropdown menu) -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?pages=lobby">Ville d'arras</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php?pages=history">Histoire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?pages=monuments">Monuments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?pages=events">Evenements</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Autre</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index.php?pages=login">Connexion</a>
            <a class="dropdown-item" href="index.php?pages=signup">Inscription</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php?pages=contact">Contact</a>
            <a class="dropdown-item" href="index.php?pages=list_contact">Liste des contact</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>