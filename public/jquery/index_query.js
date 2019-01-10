$(document).ready(function(){
    //calculeJ();


    // ajouter une ligne au tableau
    $("#btnAjoutType").click(function () {


        let nom_type_formation = $("#nom_Type_formation").val();
        let nom_formation = $("#nom_formation").val();
        let volumeH = parseInt($("#volume_horaire").val());
        let prixH = parseInt($("#prixHc").val());
        let taxe = parseInt($("#Taxe").val());
        let result = prixH + (prixH*taxe/100);


        $(".formations").append("<li class='dropdown'>\n" +
            "<a href='#' class='lien' id='"+nom_type_formation+"'>"+nom_type_formation+"</a>\n" +
            "<div class='dropdown-content'>" +
            "<p><a href='#' class='lien'>"+nom_formation+"</a></p>" +
            "</div>" +
            "</li>");

        $('#select_type_formation').append("<option value='"+nom_type_formation+"' selected='selected'>"+nom_type_formation+"</option>");
        $('#table > tbody').empty();
        $("#table > tbody:last").append("<tr class='ligne' id='"+nom_formation+"'>" +
            "<td>" +nom_formation+"</td>" +
            "<td>" +volumeH+"</td>" +
            "<td>" +prixH+"</td>" +
            "<td>" +taxe+"</td>" +
            "<td>" +result+ "</td>" +
            "<td ><button class='mod' id='"+nom_formation+"'>M</button></td>" +
            "<td ><button class='del' id='"+nom_formation+"'>-</button></td>" +
            "</tr>");
        $("#ajoutTypeFormationModal").css({
            display:'none',
        });
        /*$.post('../controller/ajoutbd.php',{type :$("#nom_Type_formation").val() ,nom : $("#nom_formation").val(), volumeHc : $("#volume_horaire").val(), prixhc : $("#prixHc").val(),taxe:$("#Taxe").val() }, function(data){
        }).fail(function() {
            // just in case posting your form failed
            alert( "Posting failed." );
        });*/
        $("#nom_Type_formation").val('');
        $("#nom_formation").val('');
        $("#volume_horaire").val('');
        $("#prixHc").val('');
        $("#Taxe").val('');
    });

    $("#btnAjoutformation").click(function () {

        let nom_formation = $("#nom_formationf").val();
        let volumeH = parseInt($("#volume_horairef").val());
        let prixH = parseInt($("#prixHcf").val());
        let taxe = parseInt($("#Taxef").val());
        let result = prixH + (prixH*taxe/100);



        $("#select_type_formation").change(function(){

            var jObj = $("option", this).filter(":selected"), // objet jQuery contenant l'option sélectionnée
                id = jObj.get(0).id, // id
                n = id.slice(1), // numéro
                v = jObj.val(), // value
                t = jObj.text(); // texte
            console.log(t);
            //console.log( id, n, v, t ); // touche F12 et volet console sur IE9, Chrome et Firefox
        });

    // ajouter a la liste

        $("#table > tbody:last").append("<tr class='ligne' id='"+nom_formation+"'>" +
            "<td>" +nom_formation+"</td>" +
            "<td>" +volumeH+"</td>" +
            "<td>" +prixH+"</td>" +
            "<td>" +taxe+"</td>" +
            "<td>" +result+ "</td>" +
            "<td ><button class='mod' id='"+nom_formation+"'>M</button></td>" +
            "<td ><button class='del' id='"+nom_formation+"'>-</button></td>" +
            "</tr>");
        $("#ajoutFormationModal").css({
            display:'none',
        });
        /*$.post('../controller/ajoutbd.php',{type :$("#nom_Type_formation").val() ,nom : $("#nom_formation").val(), volumeHc : $("#volume_horaire").val(), prixhc : $("#prixHc").val(),taxe:$("#Taxe").val() }, function(data){
        }).fail(function() {
            // just in case posting your form failed
            alert( "Posting failed." );
        });*/
        $("#nom_formationf").val('');
        $("#volume_horairef").val('');
        $("#prixHcf").val('');
        $("#Taxef").val('');
    });

    var d;
    function update(){
        d=$(".del");
        d.click(function () {
            // supprimer de la table
            console.log(d);
            var e= this.id;
            ///console.log(this.id);
            var l = $("#"+e.toString()+".ligne");
            l.remove();
            /*$.post('../controller/deletebd.php',{type : e.toString() }, function(data){
            }).fail(function() {
                // just in case posting your form failed
                alert( "Posting failed." );
            });*/
            // suprimer de la liste
            $("#"+e.toString()+".lien").remove();

        })
    }

    setInterval(update,5);


    //console.log(l.length);



});

/*function calculeJ() {
    for (let i=1;i<6;i++){
        let prixHc =parseInt($(`#table > tbody tr:nth-child(${i}) .hc`).html());
        let taxe = parseInt($(`#table > tbody tr:nth-child(${i}) .taxe`).html());
        $(`#table > tbody tr:nth-child(${i}) .ttc`).append(prixHc + (prixHc*taxe/100));
    }
}*/


var modaltypeformation = document.getElementById('ajoutTypeFormationModal');
var modalformation = document.getElementById('ajoutFormationModal');

var ajouttypeformation = document.getElementById('ajout_type_formation');
var ajouterformation = document.getElementById('ajouter_formation');

var close = document.getElementsByClassName("close")[0];
var closef =document.getElementsByClassName("close")[1];

// ajout type formation
ajouttypeformation.onclick = function() {
    modaltypeformation.style.display = "block";
};
close.onclick = function() {
    modaltypeformation.style.display = "none";
};

// ajout formation
ajouterformation.onclick = function() {
    modalformation.style.display = "block";
};
closef.onclick = function() {
    modalformation.style.display = "none";
};
window.onclick = function(event) {
    if (event.target == modaltypeformation) {
        modaltypeformation.style.display = "none";
    }else if (event.target == modalformation) {
        modalformation.style.display = "none";
    }
};