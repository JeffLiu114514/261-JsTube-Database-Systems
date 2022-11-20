
//document.getElementById('button1').addEventListener('click', loadUser);

document.getElementById('submit').addEventListener('submit', getInfo);

function getInfo(e) {
    e.preventDefault();
    var params = "";    
    
    var ad_id = document.getElementById("ad_id").value;
    var pwd = document.getElementById("pwd").value;
    params += "administrator_id=" + ad_id + "password=" + pwd;

    var request = new XMLHttpRequest();
    request.open('GET', 'ad-login.php', true);

    xhr.onload = function() {
        if(this.responseText != null) console.log(this.responseText);
    }

    xhr.send(params);
}


// if(this.status == 200) {
    
// } else {
//     alert(
//         "Failed with status: "+this.status
//     );
// }

// request.onload = function() {
//     //console.log("hello");
    
// }

// request.send(params);
// alert(request.responseText);

