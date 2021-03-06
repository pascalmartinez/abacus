<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <?php
        // include 'header.php';
        include 'BDD/function_select_exo.php';
        include 'includes/function_affiche_exo.php';
        include 'BDD/ConnectBDD.php';
        include 'BDD/reponse.php';

        ?>
        <title>A toi de jouer!!!</title>
    </head>
    <body >

        <?php $connect = connectDB(); ?>

        <div class="container section" >
            <div class="row">
                <div class="col-10 col-md-3">
                    <div class="input-group d-md-flex mb-3 mt-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputNiveau">Niveau</label>
                        </div>
                        <select id ="level" class="custom-select col-6 col-md-4">

                           <?php
                            $stmt = selectNiveau($connect);
                            $stmt = afficherSelectNiveau($stmt,$connect);
                            // echo "balance ton niveau!!!";
                            ?>

                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section" >
            <div class="row">
                <div class="col-6" id="val">

                        <?php
                        $stmt = selectExo($connect);
                        $stmt = afficherExo($stmt, $connect);

                        // echo "balance ton exo!!!";
                        ?>

                </div>
                <div class="container section" >
                    <div class="row">
                        <div class="col-6">
                          <label for="Input form-title">Réponse : </label>
                          <input name="titreexo" type="text" id="reponseUser" class="form-field" placeholder="Indiquer votre réponse ici">
                            <?php
                              //si user a cliqué OK
                              // if(isset($_POST['reponseUser'])){
                              //   //récupère la valeur entrée
                              //   $nombre=$_POST['num'];
                              //   //place dans $toto la valeur de retour de ma fonction
                              //   $toto=parite($nombre);
                              //   //affiche le verdict entier
                              //   echo 'Ce nombre est '.$toto.'.';
                              // }
                             ?>

                        </div>
                    </div>
                </div>
            </div>
            <button type="button"  id="buttonNext" value="valider" onclick= "exo()">Exercice suivant</button>

        </div>
      </div>

        <script  src="includes/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/jqueryExo.js"></script>
        <script type="text/javascript" src="js/selectLevel.js"></script>



    </body>
</html>
