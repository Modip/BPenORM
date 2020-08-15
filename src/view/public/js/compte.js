//Function tanef client

function chwclient() 
{
    var typeclient = document.getElementById('typeclient');

    if (typeclient.value == "0") {
        alert("Veillez choisir un client physique ou un client moral");
    }
    if (typeclient.value == "1") {
        clientphysique.style.display = 'block';
        clientmoral.style.display = 'none';
        boutton.style.display = 'block';

    }
    if (typeclient.value == "2") {
        clientmoral.style.display = 'block';
        clientphysique.style.display = 'none';
        boutton.style.display = 'block';

    }
}
//Fonction nangou bidoum client
function validation()
{
    var verify = 0;
    var clerib = document.getElementById("clerib");
    var agios = document.getElementById("agios");
    var solde = document.getElementById("solde");
    var fraisou = document.getElementById("fraisou");
    var dateou = document.getElementById("dateou");

    var contrclerib = document.getElementById("contrclerib");
    var contrsolde = document.getElementById("contrsolde");
    var contragios = document.getElementById("contragios");
    var contrfraisou = document.getElementById("contrfraisou");
    var contrdateou = document.getElementById("contrdateou");

    var soldemor = document.getElementById("soldemor");
    var cleribmor = document.getElementById("cleribmor");
    var fraismor = document.getElementById("fraismor");
    var contrsoldemor = document.getElementById("contrsoldemor");
    var contrcleribmor = document.getElementById("contrcleribmor");
    var contrfraismor = document.getElementById("contrfraismor");

    if (typeclient.value == "2") {
        if (soldemor.value == "") {
            contrsoldemor.style.display = 'block';
            verify = 1
        }
        if (cleribmor.value == "") {
            contrcleribmor.style.display = 'block';
            verify = 1
        }
        if (fraismor.value == "") {
            contrfraismor.style.display = 'block';
            verify = 1
        }

    }
    if (typeclient.value == "1") {
        if (clerib.value == "") {
            contrclerib.style.display = 'block';
            verify = 1

        }
        if (clerib.value == "") {
            contrclerib.style.display = 'block';
            verify = 1

        }
        if (solde.value == "") {
            contrsolde.style.display = 'block';
            verify = 1

        }
        if (solde.value == "") {
            contrsolde.style.display = 'block';
            verify = 1
        }
        if (agios.value == "") {
            contragios.style.display = 'block';
            verify = 1
        }

        if (fraisou.value == "") {
            contrfraisou.style.display = 'block';
            verify = 1
        }
        if (dateou.value == "") {
            contrdateou.style.display = 'block';
            verify = 1
        }

    }
    if (verify != 0) {
        return false
    }
};
