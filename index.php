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
    <script src="./js/script.js"></script>
    <link rel="icon" href="img/favicon.ico">
  </head>

  <body>
    <header class="bg">
      <div class="bs-example">
          <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #30292F;">
          <a href="index.php">
            <img class="img-fluid" alt="Responsive image" src="img/logo.png">
          </a>
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                  <form class="form-inline">
                      <div class="input-group">                    
                          <input type="text" class="form-control" placeholder="Rechercher une offre">
                          <div class="input-group-append">
                              <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                          </div>
                      </div>
                  </form>
                  <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link Subt2" data-toggle="modal" data-target="#exampleModalCenter">S'inscrire</a>
                    <button type="button" class="btn greycolor Subt2" data-toggle="modal" data-target="#exampleModalCenter2">Se connecter</button>
                  </div>
              </div>
          </nav>
      </div>
    </header>

    <main>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">S'inscrire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form class="test" method="post" action="./back/inscription.php">
              <div class="container">
                <div class="alert alert-secondary text-center" role="alert">
                  Merci de rentrer correctement vos informations pour pouvoir être valider
                </div>

                <div class="form-row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Prénom" name="prenom">
                  </div>

                  <div class="col">
                    <input type="text" class="form-control" placeholder="Nom" name="nom">
                  </div>
                </div>

                <div class="test">
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Adresse e-mail" name="email">
                  </div>

                  <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" name="password">
                  </div>

                  <div class="form-group">
                      <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirmer mot de passe" name="passwordverif">
                  </div>

                  <div class="alert alert-danger test2 small" role="alert">
                      Ne partager pas votre mot de passe !
                  </div>
                </div>
                
                <div>
                  <select class="custom-select nicomarg">
                    <option selected>Vous êtes ...</option>
                    <option value="1">Un recruteur</option>
                    <option value="2">Un candidat</option>
                  </select>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                  <button type="submit" id="submit" class="btn btn-primary greycolor">S'enregistrer</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content text-center">

            <div class="modal-header">
              <h5 class="modal-title">Se connecter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="alert alert-secondary text-center" role="alert">
                  Merci de rentrer correctement vos informations pour pouvoir être valider
            </div>

            <form class="container">
              <div class="form-group margin1">
              <label for="examInputEmail1"><i class="far fa-user"></i>   Adresse e-mail</label>
                <input type="email" class="form-control marg1" id="examInputEmail1" aria-describedby="emailHelp" placeholder="Adresse e-mail">
              </div>
              <div class="form-group">
                <label for="examInputPassword2"><i class="fas fa-sign-out-alt"></i>    Mot de passe</label>
                <input type="password" class="form-control marg1" id="examInputPassword2" placeholder="Mot de passe">
              </div>
              <div class="alert alert-danger test2 small" role="alert">
                Ne partager pas votre mot de passe !
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
              </div>
              <div class="modal-footer">
              <button type="submit" class="btn btn-primary greycolor">Se connecter</button>
              </div>
            </form>
          </div>
        </div>
      </div>  

      <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <strong>NOUVEAU</strong> Voici une nouvelle offre qui devrais vous intéresser.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <?php include "back/annonces.php";?>
    </main>

    <footer class="py-4 text-white sticky-bottom">
        <div class="container text-center">
          <small>Copyright &copy; JobBoar'd</small>
        </div>
    </footer>

  </body>
</html>
