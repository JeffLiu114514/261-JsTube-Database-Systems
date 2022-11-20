
//document.getElementById('button1').addEventListener('click', loadUser);
//console.log("in the js file");
document.addEventListener("DOMContentLoaded", function(){
    document.getElementById('submit').addEventListener('click', getInfo);
    //console.log("event listener added");
});

function getInfo(e) {
    e.preventDefault();
    //console.log("button pressed");
    var params = "";    
    
    var ad_id = document.getElementById("ad_id").value;
    var pwd = document.getElementById("pwd").value;
    params += "administrator_id=" + ad_id + "&password=" + pwd;
    //console.log(params);

    var request = new XMLHttpRequest();
    request.open('POST', 'ad-login.php', true);

    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    request.onload = function() {
        //console.log(this);
        if(this.responseText != null) {
            if(this.responseText.startsWith('<!DOCTYPE html>')) {
                window.location.href = this.responseURL;
            } else {
                alert(this.responseText);
            }
        }
    }

    request.send(params);
}

// var request = new XMLHttpRequest();
// request.open('GET', 'ad.php', true);

// request.onload = function() {
//     console.log("hello");
//     if(this.status == 200) {
//         var users = JSON.parse(request.responseText);
//         //console.log(user.name);
//         var output = '<tr><th>No</th><th>Video</th><!-- <th>Creator</th> --><!-- <th>Link</th> --><th>Type</th><th>Reported By</th></tr>';

//         for(var i in users) {
//             output += '<tr>' +
//             '<td>' + users[i].Case_id + '</td>' +
//             '<td>' + users[i].Video_id + '</td>' +
//             '<td>' + users[i].Type + '</td>' +
//             '<td>' + users[i].Report_user_id + '</td>' +
//             '</tr>';
//         }

//         document.getElementById('task').innerHTML = output;
//         console.log("output=" + output);
//         // var content = request.responseText;
//         // console.log(content);
//     } else {
//         console.log(this.status);
//     }
// }

// request.send();

