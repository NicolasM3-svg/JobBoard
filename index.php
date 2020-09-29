<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jobboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </head>
  <body>

    <header class="bg">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img class="img-fluid" alt="Responsive image" src="test.png">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">LIEN 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">LIEN 2</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    AUTRES
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">ACTION 1</a>
                    <a class="dropdown-item" href="#">ACTION 2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">ACTION 3</a>
                  </div>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Rechercher">
                <button type="button" class="btn btn-light rechercher">Rechercher</button>
              </form>

              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
              S'inscrire
              </button>

              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">S'inscrire</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <div class="alert alert-secondary text-center" role="alert">
                      Merci de rentrer correctement vos informations pour pouvoir être valider
                    </div>

                    <form>
                      <div class="form-row test">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Prénom">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Nom">
                        </div>
                      </div>
                    </form>

                    <form class="test">
                      <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="alert alert-danger test2 small" role="alert">
                        Ne partager pas votre mot de passe !
                      </div>
                    </form>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                      <button type="button" class="btn btn-primary">S'enregistrer</button>
                    </div>
                  </div>
                </div>
              </div>

              <button type="button" class="btn btn-primary">
                  Se connecter
              </button>
            </div>
          </nav>
    </header>

    <main>

      <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <strong>NOUVEAU</strong> Voici une nouvelle offre qui devrais vous intéresser.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <?php include "back/annonces.php"; ?>

        <!--<div class="card-columns text-center">
          <div class="card carn">
            <div class="card-header">
              TYPE DE L'OFFRE : CDD ...etc
            </div>
            <div class="card-body">
              <h5 class="card-title">NOM ENTREPRISE</h5>
              <p class="card-text">Description de l'entreprise qui recherche une personne pour un poste précis.</p>
              <button type="button" class="btn btn-dark">En savoir plus</button>
              <button type="button" class="btn btn-dark">Appliquer</button>
            </div>
            <div class="card-footer text-muted">
              Il y a 2 jours..
            </div>
        </div>-->

        </div>

    </main>

    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
          <small>Copyright &copy; Jobboard</small>
        </div>
    </footer>

  <script>
    $(document).ready(function(){
      $(".modal").on("show.bs.modal", function(){
        if ( !$(this).parent().is("body")) {
          $(this).appendTo("body");
        }

        $("body").children().not(this).addClass("blur");
      })
      .on("hide.bs.modal", function() {
        $("body").children().not(this).removeClass("blur");
      })
    })
  </script>

  </body>
</html>
