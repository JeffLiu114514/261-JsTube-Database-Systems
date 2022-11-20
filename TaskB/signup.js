
document.addEventListener("DOMContentLoaded", function(){
    document.getElementById('submit').addEventListener('click', getInfo);
    //console.log("event listener added");
});

function getInfo(e) {
    e.preventDefault();
    var params = "";    

    var p1 = document.getElementById("pwd").value;
    var p2 = document.getElementById("pwd2").value;

    if(p1 != p2) {
        console.log(p1 + ' ' + p2);
        // p1.value = "";
        // p2.value = "";
        alert("Password does not match. Please try again.");
        return;
    }
    
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    
    var email_pattern = /.+@.+/;
    if(!email_pattern.test(email)) {
        alert("Invalid Email Addresss. Please try again.");
        email.value = '';
        return;
    }

    params += "User_name=" + username + "&Email=" + email + "&Password=" + p1 + "&Password2=" + p2;
    //console.log(params);

    var request = new XMLHttpRequest();
    request.open('POST', 'connect.php', true);

    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    request.onload = function() {
        console.log(this);
        if(this.responseText != null) {
            if(this.responseText.startsWith('<!DOCTYPE html>')) {
                console.log(this.responseURL);
                window.location.href = this.responseURL;
            } else {
                alert(this.responseText);
            }
        }
    }

    request.send(params);
}
