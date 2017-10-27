var regex = new RegExp(/([^A-Za-z0-9\-_.])/);

function inputValid() {

    var ch=document.getElementById("usrId").value;


    if (regex.test(ch)||ch=="") {
        document.getElementById("btnCnx").disabled = true;
        document.getElementById("usrId").style.borderColor="red";

    }
    else {
        document.getElementById("btnCnx").disabled = false;
        document.getElementById("usrId").style.borderColor="green";
    }

}

function inputValidV2() {

    var ch=document.getElementById("btnAjt").value;
    if (regex.test(ch)||ch=="") {
        document.getElementById("btnAjt").disabled = true;
        document.getElementById("nomCat").style.borderColor="red";

    }
    else {
        document.getElementById("btnAjt").disabled = false;
        document.getElementById("nomCat").style.borderColor="green";
    }

}
