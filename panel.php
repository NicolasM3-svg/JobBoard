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

    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Se déconnecter</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            Êtes vous sûrs de vous déconnecter ?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Rester connecter</button>
            <button type="button" class="btn btn-primary">Se déconnecter</button>
          </div>
        </div>
      </div>
    </div>

    <div class="card paneladd text-center marg1p">
      <div class="card-body nicotest">
        <h5 class="card-title"><i class="fa fa-user"></i>   Mettre à jour son profil</h5>
      </div>
    </div>

    <div class="container">
      <form>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Changer adresse email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Changer mot de passe</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword4" class="col-sm-2 col-form-label">Confirmation mot de passe</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword4">
          </div>
        </div>
        <fieldset class="form-group">
          <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Types de contrats recherchés</legend>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                <label class="form-check-label" for="gridRadios1">
                  CDI
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                <label class="form-check-label" for="gridRadios2">
                  CDD
                </label>
              </div>
              <div class="form-check disabled">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                <label class="form-check-label" for="gridRadios3">
                  Alternance
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option2">
                <label class="form-check-label" for="gridRadios4">
                  Interim
                </label>
              </div>
            </div>
          </div>
        </fieldset>
          <div class="form-group">
            <label for="inputAddress">Addresse</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="XX rue du Lyon à Epitech">
          </div>
          <div class="form-group">
            <label for="inputAddress2">Complément Addresse</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Appartement N°115, studio, étage">
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
              <label for="inputZip">Code postal</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
          </div>
      </form>
    </div>

    <div class="card paneladd text-center">
      <div class="card-body nicotest">
        <h5 class="card-title"><i class="fas fa-file-upload"></i>   Mettre son CV / Présentation</h5>
      </div>
    </div>

    <div class="container">
      <div class="custom-file cvinput">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choisir son CV</label>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Présentation</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains" rows="10"></textarea>
      </div>
    </div>

    </main>

    <footer class="py-4 text-white sticky-bottom">
        <div class="container text-center">
          <small>Copyright &copy; JobBoar'd</small>
        </div>
    </footer>

  </body>
</html>
