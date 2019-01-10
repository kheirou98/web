<?php
session_start();
if (!empty($_SESSION)){
   /// var_export($_SESSION);
}
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ComparateurEcole</title>
        <link href="../public/css/index.css" rel="stylesheet">


    </head>
    <body>

    <!-- la bar de nom et de logout -->
    <ul id="bar">
        <li id="ilogout" style="float:right; color: #f9f9f9" ><a href="authentification/logout.php">LOGOUT</a></li>
        <li id="ilogin" style="float:left; color: #f9f9f9" ><?php echo "\t ".$_SESSION["username"] ?></li>
    </ul>


    <!-- la liste des formation -->
    <ul class="formations">
        <?php
        include "ListeFormation/liste.php";
        ?>
    </ul>


    <h1>Gestion Form : </h1>
    <?php
    if ($_SESSION["type"] ==0) {
        ?>
        <div style="display: inline-block">
            <button id="ajout_type_formation"> Ajouter Type_Formation</button>

            <select id="select_type_formation">
                <?php

                include("selectOption/type_formation.php")

                ?>
            </select>

            <button id="delete_type_formation">Supprimer Ce Type</button>

            <button id="modif_type_formation">Modifier Ce Type</button>


        </div>

        <?php
    }
    ?>

    <table id="table" border="1px solid">
        <thead>
        <tr>
            <td>formation</td>
            <td>Volume Horaire</td>
            <td>prixHC</td>
            <td>Taxe %</td>
            <td>prixTTC</td>
            <td> M</td>
            <td> - </td>
        </tr>
        </thead>
        <tbody>
        <?php
        if ($_SESSION['type'] == 1) {
            include "table.php";
        }else if($_SESSION['type'] == 0){
           include "TableFormation/tablead.php";
        }
        ?>
        </tbody>
    </table>

    <br>

    <button id="ajouter_formation"> Ajouter Formation</button>


    <div id="ajoutTypeFormationModal" class="modalType">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <label>Type formation : </label>
                <input type="text" id="nom_Type_formation" name="type_formation"><br>
                <label>Nom de formation :</label>
                <input type="text" id="nom_formation" name="formation" ><br>
                <label>VolumeHoraire : </label>
                <input type="number" id="volume_horaire" name="volumeHc"><br>
                <label>prix Hc : </label>
                <input type="number" id="prixHc" name="prixhc"><br>
                <label>Taxe : </label>
                <input type="number" id="Taxe" name="taxe"><br>
                <button id="btnAjoutType">Submit</button>
            </div>

    </div>

    <div id="ajoutFormationModal" class="modalType">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <label>Nom de formation :</label>
            <input type="text" id="nom_formationf" name="formation" ><br>
            <label>VolumeHoraire : </label>
            <input type="number" id="volume_horairef" name="volumeHc"><br>
            <label>prix Hc : </label>
            <input type="number" id="prixHcf" name="prixhc"><br>
            <label>Taxe : </label>
            <input type="number" id="Taxef" name="taxe"><br>
            <button id="btnAjoutformation">Submit</button>
        </div>

    </div>



    <!-- <div id="video">
         <video class="video_p" width="50%" controls><source src="public/image/Video%20accueil.mp4" type="video/mp4"></video>
     </div> -->

    <footer>
        <div>
            <p><a href="esi@esi.dz">CONTACT</a></p>
        </div>



    </footer>
    <?php
    include "../controller/testdb.php"

    ?>

    <!--<script src="public/js/index.js"> </script>-->
    <script src="../public/jquery/jquery-3.3.1.js"></script>
    <script src="../public/jquery/jquery-3.3.1.min.js"></script>
    <script src="../public/jquery/index_query.js"></script>


    </body>
    </html>
