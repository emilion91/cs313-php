function validateemail(){
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validate(){
    var email = document.getElementById("email");
    if (validateEmail(email)) {
        email.css("backgroundcolor", "green");
    } else {
        email.css("backgroundcolor", "red");
    }
    return false;
}
