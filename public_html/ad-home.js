
//document.getElementById('button1').addEventListener('click', loadUser);

const types = ["Violence", "Spam", "Misleading", "Copyright Issues", "Sexual Content"]

var request = new XMLHttpRequest();
request.open('GET', 'ad-home.php', true);

request.onload = function() {
    //console.log("hello");
    if(this.status == 200) {
        var users = JSON.parse(request.responseText);
        //console.log(user.name);
        var output = '<tr><th>No</th><th>Video</th><!-- <th>Creator</th> --><!-- <th>Link</th> --><th>Type</th><th>Reported By</th></tr>';

        for(var i in users) {
            output += '<tr>' +
            '<td>' + users[i].Case_id + '</td>' +
            '<td>' + users[i].Video_id + '</td>' +
            '<td>' + types[users[i].Type] + '</td>' +
            '<td>' + users[i].Report_user_id + '</td>' +
            '</tr>';
        }
        console.log("output=" + output);
        document.getElementById('task').innerHTML = output;
        
        // var content = request.responseText;
        // console.log(content);
    } else {
        alert(
            "Failed with status: "+this.status
        );
    }
}

request.send();

