var regex = new RegExp(/([^A-Za-z0-9\-_.])/);

function inputValid() {



    if (regex.test(document.getElementById("usrId").value)|| document.getElementById("usrId").value=="") {
        document.getElementById("btnCnx").disabled = true;
        document.getElementById("usrId").style.borderColor="red";

    }
    else {
        document.getElementById("btnCnx").disabled = false;
        document.getElementById("usrId").style.borderColor="green";
    }

}

function inputValidV2() {

    if (regex.test(document.getElementById("nomCat").value)||document.getElementById("nomCat").value=="") {
        document.getElementById("btnAjt").disabled = true;
        document.getElementById("nomCat").style.borderColor="red";

    }
    else {
        document.getElementById("btnAjt").disabled = false;
        document.getElementById("nomCat").style.borderColor="green";
    }

}
