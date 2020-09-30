<?php
include "bdd.php";
$nb = 0;
$req = $bdd->query("SELECT id, entreprise, type, poste, description, tags, p_date FROM annonces");
       while($row = $req->fetch()) {
          $id = $row["id"];
          $entreprise = $row["entreprise"];
          $type = $row["type"];
          $poste = $row["poste"];
          $description = $row["description"];
          $tags = $row["tags"];
          $date = $row["p_date"];

          $req2 = $bdd->query("SELECT nom, description FROM entreprises WHERE id = $entreprise");
          while($row = $req2->fetch()) {
             $entreprise = $row["nom"];
             $desc_entreprise = $row["description"];
           };

            echo "<div class=\"card text-center ";
            if ($nb == 0) {
              echo "central\">";
            }else{echo "\">";}
              echo "<div class=\"card-header\" id=\"$id\">";
                  if ($nb == 0) {
                    echo "<span class=\"badge badge-secondary newpost\">Nouveau</span>";
                  }
                  echo "TYPE DE L'OFFRE : $type
                </div>
                <div class=\"card-body\">
                  <h5 class=\"card-title\">$poste - $entreprise </h5>
                  <p class=\"card-text\" >$desc_entreprise</p>
                  <p class=\"card-text collapse\" id=\"collapseExample$id\">$description</p>
                  <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"collapse\" data-target=\"#collapseExample$id\">En savoir plus</button>
                  <button type=\"button\" class=\"btn btn-dark\">Appliquer</button>

                </div>
                <div class=\"card-footer text-muted\">
                  $date
                </div>
            </div>";
            if ($nb == 0){
              echo "<div class=\"card-columns text-center\">";
              $nb = 1;
            }
          };








 ?>
