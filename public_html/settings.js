var user_schema = ['User_id', 'User_name', 'Email', 'Password'];

var request = new XMLHttpRequest();
request.open('GET', 'user-home.php?get=info', true);

request.onload = function() {

    if(this.status == 200) {

        var user = JSON.parse(request.responseText);

        var output = "";

        output += '<tr><td>User ID</td><td>' + user[0].User_id + '</td></tr>' +
        '<tr><td>Username</td><td>' + user[0].User_name + '</td></tr>' +
        '<tr><td>Email</td><td>' + user[0].Email + '</td></tr>' +
        '<tr><td>Password</td><td>' + hide_pwd(user[0].Password) + '</td></tr>';
        
        document.getElementById('info').innerHTML = output;
    } else {
        alert(
            "Failed with status: "+this.status
        );
    }
}

request.send();

function hide_pwd(pwd) {
    var mark = "*";
    var hide = mark.repeat(String(pwd).length);
    // console.log(String(pwd).length);
    // for(var i in String(pwd).length) hide += "*";
    console.log(hide);
    return hide;
}