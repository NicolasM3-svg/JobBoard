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

    <!--
      Menu de navigation
    -->

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

    <!--
      Popup pour s'inscrire au site
    -->

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <a href="index.php">
                  <img class="img-fluid" alt="Responsive image" src="img/inscription.png">
                </a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form class="test" id="inscription" name="inscription">
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
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" name="mdp">
                  </div>

                  <div class="form-group">
                      <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirmer mot de passe" name="mdpverif">
                  </div>

                  <div class="alert alert-danger test2 small" role="alert">
                      Ne partager pas votre mot de passe !
                  </div>
                </div>
                
                <div>
                  <select name="type" class="custom-select nicomarg">
                    <option selected>Vous êtes ...</option>
                    <option value="1">Un recruteur</option>
                    <option value="2">Un candidat</option>
                  </select>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                  <button type="button" id="submit" class="btn btn-primary greycolor">S'enregistrer</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!--
        Popup pour se connecter au site
      -->

      <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content text-center">

            <div class="modal-header">
                <a href="index.php">
                  <img class="img-fluid" alt="Responsive image" src="img/connecter.png">
                </a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="alert alert-secondary text-center" role="alert">
                  Merci de rentrer correctement vos informations pour pouvoir être valider
            </div>

            <form class="container">
              <div class="form-group margin1">
              <label for="inputemail1"><i class="far fa-user"></i>   Adresse e-mail</label>
                <input type="email" class="form-control marg1" id="email3" name="inputemail1" placeholder="Adresse e-mail">
              </div>
              <div class="form-group">
                <label for="inputmdp1"><i class="fas fa-sign-out-alt"></i>    Mot de passe</label>
                <input type="password" class="form-control marg1" id="password3" name="inputmdp1" placeholder="Mot de passe">
              </div>
              <div class="alert alert-danger test2 small" role="alert">
                Ne partager pas votre mot de passe !
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
              </div>
              <div class="modal-footer">
              <button type="button" id="connectid" class="btn btn-primary greycolor">Se connecter</button>
              </div>
            </form>
          </div>
        </div>
      </div>  

      <!--
        Popup pour postuler à une offre en se connectant ou non
      -->

      <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content text-center">
              <div class="modal-header">
                <a href="index.php">
                  <img class="img-fluid" alt="Responsive image" src="img/postuler.png">
                </a>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>

              <!--
                Navbar pour choisir entre "Se connecter" ou "Postuler sans se connecter"
              -->

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Se connecter</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Postuler sans se connecter</a>
                </li>
              </ul>

            <!--
              Bouton se connecter par le bouton "Appliquer"
            -->

            <div class="tab-content" id="myTabContent">
              <form class="tab-pane fade show active" id="home" aria-labelledby="home-tab">
                <div class="container">
                <div class="alert alert-primary text-center" role="alert">
                    Se connecter permet de postuler sans à renseigner vos informations !
                  </div>
                <div class="form-group margin1">
                <label for="emailcontact"><i class="far fa-user"></i>   Adresse e-mail</label>
                  <input type="email" class="form-control marg1" id="emailcontact" placeholder="Adresse e-mail">
                </div>
                <div class="form-group">
                  <label for="passwordoffre"><i class="fas fa-sign-out-alt"></i>    Mot de passe</label>
                  <input type="password" class="form-control marg1" id="passwordoffre" placeholder="Mot de passe">
                </div>
                <div class="alert alert-danger test2 small" role="alert">
                  Ne partager pas votre mot de passe !
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary greycolor">Se connecter</button>
                </div>
                </div>
              </form>

              <!--
                Formulaire pour postuler sans se connecter
              -->

              <form class="test tab-pane fade" id="profile" aria-labelledby="profile-tab" method="post" action="./back/inscription.php">
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
                      <input type="email" class="form-control" id="emailuser" placeholder="Adresse e-mail" name="emailuser">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="adresse">Addresse</label>
                    <input type="text" class="form-control" id="adresse" placeholder="XX rue du Lyon à Epitech">
                   </div>
                  <div class="form-group">
                    <label for="comAddress">Complément Addresse</label>
                    <input type="text" class="form-control" id="comAddress" placeholder="Appartement N°115, studio, étage">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">Ville</label>
                      <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Pays</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choisir</option>
                        <option>France</option>
                        <option>Belgique</option>
                        <option>Suisse</option>
                        <option>Canada</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="codepostal">Code postal</label>
                      <input type="text" class="form-control" id="codepostal">
                    </div>
                  </div>
                  <div class="custom-file cvinput">
                    <label class="custom-file-label" for="cvfile">Choisir son CV</label>
                    <input type="file" class="custom-file-input" id="cvfile">
                  </div>
                  <div class="form-group">
                    <label for="titrePresentation">Présentation</label>
                    <textarea class="form-control" id="titrePresentation" placeholder="On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment" rows="5"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" id="submitannonce" class="btn btn-primary greycolor">S'enregistrer</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>  

      <!--
        Annonces recrutements ...etc
      -->

      <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <strong>NOUVEAU</strong> Voici une nouvelle offre qui devrais vous intéresser.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <?php include "back/annonces.php";?>
    </main>

    <!--
      Footer
    -->

    <footer class="py-4 text-white sticky-bottom">
        <div class="container text-center">
          <small>Copyright &copy; JobBoar'd</small>
        </div>
    </footer>

  </body>
</html>
