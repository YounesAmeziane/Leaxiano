<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="ubzn0wDgOWLuIR7k1JWWAVuiF1OP0KVfmHiyVIK9B0g" />
    <link rel="stylesheet" href="css/register.css">
    <link rel="shortcut icon" href="img/0007.png">
    <title>Regiatration | Leaxiano</title>
</head>
<?php

    //here php code

?>
<body>
    <div class="registration_form">
        <h1>Register</h1>
        <form action="" method="post">
            <div class="row">
                <input type="text" name="Fname" placeholder="First name" required>
                <input type="password" name="password" placeholder="password" required>
            </div>
            <div class="row">
                <input type="text" name="Cname" placeholder="Company name" required>
            </div>
            <div class="row">
                <input type="text" name="Uemail" placeholder="Email" required>
            </div>
            <div class="row">
                <select name="UCnum">
                    <option></option>
                    <option>+1</option>
                    <option>+212</option>
                    <option>+39</option>
                </select>
                <input type="text" name="Unum" placeholder="number" required>
            </div>
            <div class="row">
                <input type="text" name="UTA" placeholder="Type of activity" required>
            </div>
            <div class="row">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
