

var user_schema = ['User_id', 'User_name', 'Email', 'Password'];
var video_schema = ['Video_name', 'Video_id', 'User_id', 'Membership_requirement', 'Link', 'Upload_Time'];
var membership_schema = ['User_id', 'Level', 'Valid_date'];
var ad_schema = ['Administrator_id', 'Password', 'Email'];
var case_schema = ['Case_id', 'Administrator_id', 'Video_id', 'Type', 'Report_user_id'];
var view_schema = ['User_id', 'Video_id', 'Times'];

getUser();
getVideo();
getMembership();
getAdministrator();
getCase();
getView();

function getUser() {
    var request = new XMLHttpRequest();
    request.open('GET', 'view-database.php?table=USER', true);

    request.onload = function() {
        if(this.status == 200) {

            //write schema to table title
            var output = '<tr>';

            for(var i in user_schema) {
                output += '<th>' + user_schema[i] + '</th>';
            }

            output += '</tr>';

            //write query data for USER in to table form
            var users = JSON.parse(request.responseText);

            for(var i in users) {
                output += '<tr>' +
                '<td>' + users[i].User_id + '</td>' +
                '<td>' + users[i].User_name + '</td>' +
                '<td>' + users[i].Email + '</td>' +
                '<td>' + users[i].Password + '</td>' +
                '</tr>';
            }
            //console.log("output=" + output);
            document.getElementById('user').innerHTML = output;
            //var content = request.responseText;
            console.log(users);
        } else {
            alert(
                "Failed with status: "+this.status
            );
        }
    }

    request.send();
}

function getVideo() {
    var request = new XMLHttpRequest();
    request.open('GET', 'view-database.php?table=VIDEO', true);

    request.onload = function() {
        if(this.status == 200) {

            //write schema to table title
            var output = '<tr>';

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
                '<td>' + videos[i].User_id + '</td>' +
                '<td>' + ((videos[i].Membership_requirement == 1)?true:false) + '</td>' +
                '<td>' + videos[i].Link + '</td>' +
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
}

function getMembership() {
    var request = new XMLHttpRequest();
    request.open('GET', 'view-database.php?table=MEMBERSHIP', true);

    request.onload = function() {
        if(this.status == 200) {

            //write schema to table title
            var output = '<tr>';

            for(var i in membership_schema) {
                output += '<th>' + membership_schema[i] + '</th>';
            }

            output += '</tr>';

            //write query data for USER in to table form
            var mems = JSON.parse(request.responseText);

            for(var i in mems) {
                output += '<tr>' +
                '<td>' + mems[i].User_id + '</td>' +
                '<td>' + mems[i].Level + '</td>' +
                '<td>' + mems[i].Valid_date + '</td>' +
                '</tr>';
            }
            //console.log("output=" + output);
            document.getElementById('membership').innerHTML = output;
            //var content = request.responseText;
            console.log(mems);
        } else {
            alert(
                "Failed with status: "+this.status
            );
        }
    }

    request.send();
}

function getAdministrator() {
    var request = new XMLHttpRequest();
    request.open('GET', 'view-database.php?table=ADMINISTRATOR', true);

    request.onload = function() {
        if(this.status == 200) {

            //write schema to table title
            var output = '<tr>';

            for(var i in ad_schema) {
                output += '<th>' + ad_schema[i] + '</th>';
            }

            output += '</tr>';

            //write query data for USER in to table form
            var ads = JSON.parse(request.responseText);

            for(var i in ads) {
                output += '<tr>' +
                '<td>' + ads[i].Administrator_id + '</td>' +
                '<td>' + ads[i].Password + '</td>' +
                '<td>' + ads[i].Email + '</td>' +
                '</tr>';
            }
            //console.log("output=" + output);
            document.getElementById('administrator').innerHTML = output;
            //var content = request.responseText;
            console.log(ads);
        } else {
            alert(
                "Failed with status: "+this.status
            );
        }
    }

    request.send();
}

function getCase() {
    var request = new XMLHttpRequest();
    request.open('GET', 'view-database.php?table=CASE', true);

    request.onload = function() {
        if(this.status == 200) {

            //write schema to table title
            var output = '<tr>';

            for(var i in case_schema) {
                output += '<th>' + case_schema[i] + '</th>';
            }

            output += '</tr>';

            //write query data for USER in to table form
            var cases = JSON.parse(request.responseText);

            for(var i in cases) {
                output += '<tr>' +
                '<td>' + cases[i].Case_id + '</td>' +
                '<td>' + cases[i].Administrator_id + '</td>' +
                '<td>' + cases[i].Video_id + '</td>' +
                '<td>' + cases[i].Type + '</td>' +
                '<td>' + cases[i].Report_user_id + '</td>' +
                '</tr>';
            }
            //console.log("output=" + output);
            document.getElementById('case').innerHTML = output;
            //var content = request.responseText;
            console.log(cases);
        } else {
            alert(
                "Failed with status: "+this.status
            );
        }
    }

    request.send();
}

function getView() {
    var request = new XMLHttpRequest();
    request.open('GET', 'view-database.php?table=VIEW', true);

    request.onload = function() {
        if(this.status == 200) {

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
                '<td>' + views[i].User_id + '</td>' +
                '<td>' + views[i].Video_id + '</td>' +
                '<td>' + views[i].Times + '</td>' +
                '</tr>';
            }
            //console.log("output=" + output);
            document.getElementById('view').innerHTML = output;
            //var content = request.responseText;
            console.log(views);
        } else {
            alert(
                "Failed with status: "+this.status
            );
        }
    }

    request.send();
}
