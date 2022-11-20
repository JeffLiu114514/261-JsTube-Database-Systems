var video_schema = ['Video_name', 'Video_id', 'Membership_requirement', 'Link', 'Upload_Time'];

var request = new XMLHttpRequest();
request.open('GET', 'user-home.php?get=video', true);

request.onload = function() {

    if(this.status == 200) {

        var output = "";

        if(request.responseText === "[]") { //not a member
            output += "You haven't upload any video. Start upload now!";
            document.getElementById('video').innerHTML = output;
            return;
        }

        //write schema to table title
        output += '<tr>';

        for(var i in video_schema) {
            output += '<th>' + video_schema[i] + '</th>';
        }

        output += '</tr>';

        //write query data for USER in to table form
        var videos = JSON.parse(request.responseText);

        for(var i in videos) {
            output += '<tr>' +
            '<td>' + videos[i].Video_name + '</td>' +
            '<td>' + videos[i].Video_id + '</td>' +
            '<td>' + ((videos[i].Membership_requirement == 1)?true:false) + '</td>' +
            '<td><a class="link" href="video.html">' + videos[i].Link + '</a></td>' +
            '<td>' + videos[i].Upload_time + '</td>' +
            '</tr>';
        }
        //console.log("output=" + output);
        document.getElementById('video').innerHTML = output;
        //var content = request.responseText;
        console.log(videos);
    } else {
        alert(
            "Failed with status: "+this.status
        );
    }
}
request.send();