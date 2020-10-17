<?php
include "bdd.php";


$raw_data = file_get_contents('http://localhost/JobBoard/node/annonces');
$data = json_decode($raw_data, true);
$nb = 0;
       foreach ($data as $row) {
          $id = $row["id"];
          $entreprise = $row["entreprise"];
          $type = $row["type"];
          $poste = $row["poste"];
          $description = $row["description"];
          $tags = $row["tags"];
          $date = $row["p_date"];
          $raw_data = file_get_contents('http://localhost/JobBoard/node/entreprises/'.$entreprise);
          $data2 = json_decode($raw_data, true);
          foreach ($data2 as $row){
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
                  <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#exampleModalCenter3\">Appliquer</button>

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
