
var request = new XMLHttpRequest();
request.open('GET', 'user-home.php?get=membership', true);

request.onload = function() {
    
    var output = '';

    var member = JSON.parse(request.responseText);

    if(request.responseText === "[]") { //not a member
        output += "&#11036 User";
    } else { //is a member
        output += "&#128081 Level " + member[0].Level + " Member (until " + member[0].Valid_date + ")";
    }
    
    document.getElementById('member').innerHTML = output;
    
    console.log(member);

}
request.send();