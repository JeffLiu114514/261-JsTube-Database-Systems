var view_schema = ['Video_id', 'Times'];

var request = new XMLHttpRequest();
request.open('GET', 'user-home.php?get=history', true);

request.onload = function() {

    if(this.status == 200) {

        //console.log("success");

        if(this.responseText === "[]") {
            document.getElementById('empty-history').innerText = "You haven't watch any videos...Start watching now!";
            return;
        }

        //write schema to table title
        var output = '<tr>';

        for(var i in view_schema) {
            output += '<th>' + view_schema[i] + '</th>';
        }

        output += '</tr>';

        //write query data for USER in to table form
        var views = JSON.parse(request.responseText);

        for(var i in views) {
            output += '<tr>' +
            '<td>' + views[i].Video_id + '</td>' +
            '<td>' + views[i].Times + '</td>' +
            '</tr>';
        }
        //console.log("output=" + output);
        document.getElementById('video').innerHTML = output;
        //var content = request.responseText;
        console.log(views);
    } else {
        alert(
            "Failed with status: "+this.status
        );
    }
}
request.send();