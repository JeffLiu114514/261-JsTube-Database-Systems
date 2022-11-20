<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<h1><center> Jstube </center></h1>
<body bgcolor="cef774">
    <div><h2><center>Registration Form</center></h2></div>
    <form action='connect.php' method="POST">
        <label for="User_name"><center>Name:</center></label><br><center>
        <input type='text' name='User_name' id="User_name" required/></center><br><br>

        <label for="Email"><center>Email:</center></label><br><center>
        <input type='Email' name='Email' id='Email' required/></center><br><br>

        <label for="Password"><center>Password:</center></label><br><center>
        <input type='Password' name='Password' id='Password' required/></center><br><br>
        
        <center><input type='submit' name='submit' id="submit"/></center>
 </form>
</body>
</html>



