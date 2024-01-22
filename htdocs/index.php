<?php
session_start();
include './partials/header.php';
?>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="./assets/images/logo.png">
        <img src="./assets/images/logo.png" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>


<div class="container rose3 border border-light border-2 rounded-2 mb-3 p-5 w-25">
  <form action="./process/add_user_connexion.php" method="post">
      <div class="mb-3 text-center">
          <label for="pseudo" class="form-label "></label>
          <input type="text" class="form-control rounded-pill" name="pseudo" id="pseudo" placeholder="Entrez votre pseudo">
      </div>
      <button type="submit" class="btn btn-outline-danger">Connexion</button>
  </form>
</div>
>>>>>>> 545cbd0 (Orlane)

<?php
include './partials/footer.php';
?>