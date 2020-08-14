//function tanef client
function chwclient() {
    var typeclient = document.getElementById('typeclient');

    if (typeclient.value == "0") {
        alert("Veillez choisir un type de client");
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

};
//Fonction mélocane client domou adama
function chwnatclient() {
    var natclient = document.getElementById("natclient");
    // var salaire = document.getElementByClasseName("salaire");
    if (natclient.value == "1") {
        employeur.style.display = 'block';
        //   salaire.style.display = 'block';

    }
    if (natclient.value == "2") {
        employeur.style.display = 'none';
        //  salaire.style.display = 'none';

    }
};
//fonction bindoume client
function validate() {
    var verify = 0;
    var nameph = document.getElementById("nameph");
    var prenomph = document.getElementById("prenomph");
    var ninph = document.getElementById("ninph");
    var telph = document.getElementById("telph");
    var mailph = document.getElementById("mailph");
    var adresseph = document.getElementById("adresseph");
    var profession = document.getElementById("profession");
    var loginph = document.getElementById("loginph");
    var passwordph = document.getElementById('passwordph');

    var contrnameph = document.getElementById('contrnameph');
    var contrprenomph = document.getElementById("contrprenomph");
    var contrnin = document.getElementById("contrnin");
    var contrtelph = document.getElementById("contrtelph");
    var contradresseph = document.getElementById("contradresseph");
    var contrmailph = document.getElementById("contrmailph");
    var contrprofession = document.getElementById("contrprofession");
    var contrsoldeph = document.getElementById("contrsoldeph");
    var contrpasswordph = document.getElementById("contrpasswordph");

    var nommor = document.getElementById('nommor');
    var adresse = document.getElementById('adresse');
    var social = document.getElementById('social');
    var telmor = document.getElementById('telmor');
    var mailmor = document.getElementById('mailmor');
    var loginmor = document.getElementById('loginmor');
    var passwordmor = document.getElementById('passwordmor');
    var contrnommor = document.getElementById('contrnommor');
    var contradresse = document.getElementById('contradresse');
    var contrsocial = document.getElementById('contrsocial');
    var contrtelmor = document.getElementById('contrtelmor');
    var contrmailmor = document.getElementById('contrmailmor');
    var contrpasswordmor = document.getElementById('contrpasswordmor');



    if (typeclient.value == "1") {
        if (nameph.value == '') {
            contrnameph.style.display = 'block';
            verify = 1
        }

        if (prenomph.value == '') {
            contrprenomph.style.display = 'block';
            verify = 1
        }

        if (ninph.value == '') {
            contrnin.style.display = 'block';
            verify = 1
        }

        if (telph.value == '') {
            contrtelph.style.display = 'block';
            verify = 1
        }

        if (adresseph.value == '') {
            contradresseph.style.display = 'block';
            verify = 1
        }


        if (mailph.value == '') {
            contrmailph.style.display = 'block';
            verify = 1
        }


        if (profession.value == '') {
            contrprofession.style.display = 'block';
            verify = 1
        }


        if (loginph.value == '') {
            contrloginph.style.display = 'block';
            verify = 1
        }


        if (soldeph.value == '') {
            contrsoldeph.style.display = 'block';
            verify = 1

        }

        if (passwordph.value == '') {
            contrpasswordph.style.display = 'block';
            verify = 1

        }

    }

    if (typeclient.value == "2") {

        if (nommor.value == '') {
            contrnommor.style.display = 'block';
            verify = 1
        }

        if (adresse.value == '') {
            contradresse.style.display = 'block';
            verify = 1
        }

        if (social.value == '') {
            contrsocial.style.display = 'block';;
            verify = 1
        }
        if (telmor.value == '') {
            contrtelmor.style.display = 'block';
            verify = 1
        }

        if (mailmor.value == '') {
            contrmailmor.style.display = 'block';
            verify = 1
        }

        if (loginmor.value == '') {
            contrloginmor.style.display = 'block';
            verify = 1
        }

        if (passwordmor.value == '') {
            contrpasswordmor.style.display = 'block';
            verify = 1
        }

    }

    if (verify != 0) {
        return false
    }

};