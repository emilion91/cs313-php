function validateemail(){
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validate(){
    var email = document.getElementById("email").value;
    if (validateEmail(email)) {
        email.css("backgroundcolor", "green");
    } else {
        email.css("backgroundcolor", "red");
    }
    return false;
}

function passvalidation(){
    var pass = document.getElementById("password").value;
    var passvali = document.getElementById("passconf").value;

    if (pass == passvali){
        return true;
    }else
    {
        alert("Password doesn't match");
        return false;
    }
}
