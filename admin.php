<!DOCTYPE html>

<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>JobBoar'd - Emploi</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="./js/admin.js"></script>
    <link rel="icon" href="img/favicon.ico">
  </head>

  <body>
    <header class="bg">
      <div class="">
          <nav class="navbar" style="background-color: #30292F;">
          <a href="index.php">
            <img class="img-fluid" alt="Responsive image" src="img/logo.png">
          </a>

          <button type="button" class="btn greycolor Subt2" data-toggle="modal" data-target="#staticBackdrop"><i class="fas fa-sign-out-alt"></i>   Se déconnecter</button>
          </nav>
      </div>
    </header>

    <main>
      <div id="monitorSel" class="d-flex justify-content-center">
        <button type="button" class="btn greycolor Subt2 marg2" value="annonces" name="button">Annonces</button>
        <button type="button" class="btn greycolor Subt2 marg2" value="users" name="button">Utilisateurs</button>
        <button type="button" class="btn greycolor Subt2 marg2" value="candidatures" name="button">Candidatures</button>
        <button type="button" class="btn greycolor Subt2 marg2" value="entreprises" name="button">Entreprises</button>
      </div>

      <div class="table-responsive-xl text-center">
        <table class="table" id="monitoring">

        </table>
      <form name="dbUpdate">
      </form>
      <form name="dbAdd">
      </form>
    </div>
    </main>

    <footer class="py-4 text-white sticky-bottom">
        <div class="container text-center">
          <small>Copyright &copy; JobBoar'd</small>
        </div>
    </footer>
  </body>
</html>
