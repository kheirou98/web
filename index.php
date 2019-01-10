<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ComparateurEcole</title>
    <link href="public/css/index.css" rel="stylesheet">

   <!-- <style>
        body{
            border: 2px solid black ;
            margin: 25px;
            padding: 50px;
        }
        h1,h2,h3,h4,h5,h6{
            font-weight: bold;
        }
        #titre_page{
            font-weight: bold;
            font-style: italic;
            font-family: fantasy;
        }
        thead > tr td{
            font-weight: bold;
            font-style: italic;
        }
        tbody tr > td:nth-child(1){
            font-weight: bold;
            font-style: italic;
        }

        .liste{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;

        }
        .liste li{
            float: left;
            background-color: #333;
        }
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .image_acuille1{
            filter: blur(5px);
        }
        .image_acuille:hover{
            filter: blur(0px);
        }
        .navbar{
        }


        .image_acuille{
            margin-top:10px;
            margin-bottom: 10px;
        }
        #table{
            margin-top: 50px;
        }
        #video{
            margin: 20px;
        }
        .video_p{

        }

        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover, .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        li.dropdown a {
            background-color: black;
            color:white;
            padding: 16px;
            align-self: center;

        }
        li.dropdown a:hover {

            background-color:green;

        }


        #bar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        #ilogin {
            float: left;
        }

        #ilogin a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        #ibar a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }




    </style>-->
</head>
<body>
    <ul id="bar">
        <li id="ireg" style="float: right"><a href="view/authentification/register.php">REGISTER</a></li>
        <li id="ilogin" style="float:right"><a href="view/authentification/login.php">LOGIN</a></li>
    </ul>


    <header>
        <div>
        <h1 id="titre_page">Ecole Prive <bdo>مدرسة خاصة </bdo></h1>
        </div>
        <div class="image_acuille">
            <img class="image_acuille1" src="public/image/image%20accueil.jpg" width="100%" height="250px" >
        </div>
    </header>
    <ul class="formations">
        <?php
        include "view/liste.php";
        ?>
    </ul>


               <table id="table" border="1px solid">
                <thead>
                <tr>
                    <td></td>
                    <td>Volume Horaire</td>
                    <td>prixHC</td>
                    <td>Taxe %</td>
                    <td>prixTTC</td>
                </tr>
                </thead>
                <tbody>
                <?php
                include "view/table.php";
                ?>
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <label>Nom formation : </label>
                        <input type="text" id="nom_formation" name="type"><br>
                        <label>VolumeHoraire : </label>
                        <input type="number" id="volume_horaire" name="volumeHc"><br>
                        <label>prix Hc :       </label>
                        <input type="number" id="prixHc" name="prixhc"><br>
                        <label>Taxe :          </label>
                        <input type="number" id="Taxe" name="taxe"><br>
                        <button id="okBtn">Submit</button>

                    </div>

                </div>    </tbody>
            </table>




   <!-- <div id="video">
        <video class="video_p" width="50%" controls><source src="public/image/Video%20accueil.mp4" type="video/mp4"></video>
    </div> -->



    <footer>
        <div>
            <p><a href="esi@esi.dz">CONTACT</a></p>
        </div>

        <button id="test"> Test Button</button>

    </footer>


    <!--<script src="public/js/index.js"> </script>-->
    <script src="public/jquery/jquery-3.3.1.js"></script>
    <script src="public/jquery/jquery-3.3.1.min.js"></script>
    <script src="public/jquery/index_query.js"></script>


    <!--<script>
        for (let i=1;i<6;i++) {
            let formation = $(`#table > tbody tr:nth-child(${i}) .nameF`).html();
            let volHoraire = $(`#table > tbody tr:nth-child(${i}) .vol`).html();
            let prixHc = parseInt($(`#table > tbody tr:nth-child(${i}) .hc`).html());
            let taxe = parseInt($(`#table > tbody tr:nth-child(${i}) .taxe`).html());
            $(`#table > tbody tr:nth-child(${i}) .ttc`).text(prixHc + (prixHc * taxe / 100));
        }
        function update(){
        $.ajax({
            url: "public/json/formation.json",
            dataType : "json",
            cache : false,
            success : function(data){
                //console.log(data);
                for (let i=1;i<6;i++){
                    let formation = $(`#table > tbody tr:nth-child(${i}) .nameF`).html();
                    let volHoraire = $(`#table > tbody tr:nth-child(${i}) .vol`).html();
                    let prixHc =parseInt($(`#table > tbody tr:nth-child(${i}) .hc`).html());
                    let taxe = parseInt($(`#table > tbody tr:nth-child(${i}) .taxe`).html());
                    let e =0;
                    if (formation.toString() != data[i-1].formation.toString()){
                        $(`#table > tbody tr:nth-child(${i}) .nameF`).text(data[i-1].formation.toString());
                    }
                    if (volHoraire.toString() != data[i-1].volumeHoraire.toString()){
                        $(`#table > tbody tr:nth-child(${i}) .vol`).text(data[i-1].volumeHoraire.toString());
                    }
                    if (prixHc.toString() != data[i-1].prixhc.toString()){
                        $(`#table > tbody tr:nth-child(${i}) .hc`).text(data[i-1].prixhc.toString());

                        e =1;
                    }
                    if (taxe.toString() != data[i-1].taxe.toString()){
                        $(`#table > tbody tr:nth-child(${i}) .taxe`).text(data[i-1].taxe.toString());
                        e=1;
                    }
                    if (e){
                        $(`#table > tbody tr:nth-child(${i}) .ttc`).text(parseInt(data[i-1].prixhc.toString()) + (parseInt(data[i-1].prixhc.toString()) * parseInt(data[i-1].taxe.toString()) / 100));
                        console.log(parseInt(data[i-1].prixhc.toString()) + (parseInt(data[i-1].prixhc.toString()) * parseInt(data[i-1].taxe.toString()) / 100))
                    }
                                    }
            }

        });
        }
        update();
        setInterval(update,5000);
        /*$("#test").click(function () {
            $.getJSON("public/json/formation.json",function (data) {
                console.log(data[1].Prenom);
            })
        });*/


    </script>
-->



</body>
</html>